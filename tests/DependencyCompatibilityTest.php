<?php declare(strict_types=1);

use Brick\Math\BigDecimal;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use MplusKASSA\MplusQapi\LineData;
use MplusKASSA\MplusQapi\LineDataInput;
use MplusKASSA\MplusQapi\MplusApiClient;
use MplusKASSA\MplusQapi\SoapGenerator;
use MplusKASSA\MplusQapi\SoapParser;
use MplusKASSA\Wsdl2PhpGenerator\SoapClientException;
use MplusKASSA\Wsdl2PhpGenerator\SoapCommunicationException;
use PHPUnit\Framework\TestCase;

final class DependencyCompatibilityTest extends TestCase
{
    public function testHttpRequestAndSoapResponse(): void
    {
        $body = $this->envelope('<getApiVersionResponse xmlns="urn:mplusqapi"><majorNumber>68</majorNumber><minorNumber>0</minorNumber><revisionNumber>1</revisionNumber></getApiVersionResponse>');
        $history = [];
        $stack = HandlerStack::create(new MockHandler([new Response(200, [], $body)]));
        $stack->push(Middleware::history($history));
        $client = $this->client($stack);

        $version = $client->getApiVersion('compatibility-test');

        self::assertSame(68, $version->majorNumber);
        self::assertSame(1, $version->revisionNumber);
        self::assertCount(1, $history);
        $request = $history[0]['request'];
        self::assertSame('POST', $request->getMethod());
        self::assertSame('getApiVersion', $request->getHeaderLine('SOAPAction'));
        self::assertSame('compatibility-test', $request->getHeaderLine('X-Request-Id'));
        parse_str($request->getUri()->getQuery(), $query);
        self::assertSame(['ident' => 'test-ident', 'secret' => 'test-secret'], $query);
        self::assertStringContainsString('getApiVersion', (string) $request->getBody());
        self::assertSame($body, $client->getLastResponse());
    }

    public function testScaledQuantitiesAndMoneyRoundTripWithoutPrecisionLoss(): void
    {
        $line = new LineData();
        $line->quantity = BigDecimal::of('1.250');
        $line->price = BigDecimal::of('12.34');
        $xml = (new SoapGenerator())->write($line, 'LineData');

        self::assertStringContainsString('>1250<', $xml);
        self::assertStringContainsString('>1234<', $xml);
        $parsed = (new SoapParser())->parse($xml);
        self::assertInstanceOf(LineData::class, $parsed);
        self::assertSame('1.250', (string) $parsed->quantity);
        self::assertSame('12.34', (string) $parsed->price);
    }

    public function testDecimalInputRoundTrip(): void
    {
        $line = new LineDataInput();
        $line->quantity = BigDecimal::of('0.125');
        $line->price = BigDecimal::of('-0.01');
        $xml = (new SoapGenerator())->write($line, 'LineDataInput');
        $parsed = (new SoapParser())->parse($xml);

        self::assertInstanceOf(LineDataInput::class, $parsed);
        self::assertSame('0.125', (string) $parsed->quantity);
        self::assertSame('-0.01', (string) $parsed->price);
    }

    public function testHttpServerErrorBecomesTypedSoapFault(): void
    {
        $body = $this->envelope('<SOAP-ENV:Fault><faultcode>Client.Authentication</faultcode><faultstring>Invalid credentials</faultstring></SOAP-ENV:Fault>');
        $client = $this->client(HandlerStack::create(new MockHandler([new Response(500, [], $body)])));

        $this->expectException(SoapClientException::class);
        $this->expectExceptionMessage('Invalid credentials');
        $client->getApiVersion();
    }

    public function testConnectionFailureIsNotRetried(): void
    {
        $history = [];
        $failure = new ConnectException('Connection failed', new Request('POST', 'https://example.test'));
        $stack = HandlerStack::create(new MockHandler([$failure]));
        $stack->push(Middleware::history($history));
        $client = $this->client($stack);

        try {
            $client->getApiVersion();
            self::fail('Expected a communication exception.');
        } catch (SoapCommunicationException $exception) {
            self::assertSame($failure, $exception->getPrevious());
            self::assertCount(1, $history);
        }
    }

    public function testHandlerAndMiddlewareCanChangeBetweenRequests(): void
    {
        $body = $this->envelope('<getApiVersionResponse xmlns="urn:mplusqapi"><majorNumber>68</majorNumber><minorNumber>0</minorNumber><revisionNumber>1</revisionNumber></getApiVersionResponse>');
        $firstHistory = [];
        $secondHistory = [];
        $first = HandlerStack::create(new MockHandler([new Response(200, [], $body)]));
        $first->push(Middleware::history($firstHistory));
        $second = HandlerStack::create(new MockHandler([new Response(200, [], $body), new Response(200, [], $body)]));
        $second->push(Middleware::history($secondHistory));
        $client = new class('example.test', 443, 'test-ident', 'test-secret', 3, 15, true, $first) extends MplusApiClient {
            public function switchHandler(HandlerStack $handler): void
            {
                $this->handler = $handler;
            }
        };

        $client->getApiVersion('first');
        $client->switchHandler($second);
        $client->getApiVersion('second');
        $second->unshift(Middleware::mapRequest(function (\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface {
            return $request->withHeader('X-Per-Request', 'changed');
        }));
        $client->getApiVersion('third');

        self::assertCount(1, $firstHistory);
        self::assertCount(2, $secondHistory);
        self::assertSame('second', $secondHistory[0]['request']->getHeaderLine('X-Request-Id'));
        self::assertSame('', $secondHistory[0]['request']->getHeaderLine('X-Per-Request'));
        self::assertSame('changed', $secondHistory[1]['request']->getHeaderLine('X-Per-Request'));
    }

    private function client(HandlerStack $stack): MplusApiClient
    {
        return new MplusApiClient('example.test', 443, 'test-ident', 'test-secret', 3, 15, true, $stack);
    }

    private function envelope(string $body): string
    {
        return '<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"><SOAP-ENV:Body>'.$body.'</SOAP-ENV:Body></SOAP-ENV:Envelope>';
    }
}
