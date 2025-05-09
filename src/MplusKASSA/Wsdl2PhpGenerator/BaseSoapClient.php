<?php declare(strict_types=1);
namespace MplusKASSA\Wsdl2PhpGenerator;
use Exception;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\HandlerStack;

abstract class BaseSoapClient
{
    protected const VERSION = "1.0.0";

    protected const DEFAULT_CONNECT_TIMEOUT_SECS = 30;
    protected const DEFAULT_TIMEOUT_SECS = 600;
    protected const TNS = 'ns1';

    protected HttpClient $client;
    protected array $additionalRequestHeaders = [];
    protected ?string $lastRequest = null;
    protected ?string $lastResponse = null;
    protected string $requestId = '';
    protected string $opname;
    protected int $startTs;
    protected int $beforeCallTs;
    protected int $afterCallTs;
    protected int $endTs;

    protected float $connectTimeout;
    protected float $timeout;

    protected BaseSoapParser $parser;

    public function __construct(
        string $apiServer,
        int $apiPort,
        string $ident,
        string $secret,
        ?float $connectTimeout = null,
        ?float $timeout = null,
        bool $verify = true,
        ?HandlerStack $handlerStack = null)
    {
        if (0 !== stripos($apiServer, 'http')) {
            $apiServer = 'https://' . $apiServer;
        }
        $this->client = new HttpClient([
            'base_uri' => sprintf("%s:%u", $apiServer, $apiPort),
            'query' => [
                'ident' => $ident,
                'secret' => $secret,
            ],
            'headers' => [
                'User-Agent' => sprintf("%s %s", __CLASS__, self::VERSION),
                'Content-Type' => 'text/xml; charset=utf-8',
            ],
            'verify' => $verify,
            'handler' => $handlerStack,
        ]);
        $this->connectTimeout = $connectTimeout ?? self::DEFAULT_CONNECT_TIMEOUT_SECS;
        $this->timeout = $timeout ?? self::DEFAULT_TIMEOUT_SECS;
    }

    public function addRequestHeaders(array $requestHeaders): void
    {
        $this->additionalRequestHeaders = array_merge($this->additionalRequestHeaders, $requestHeaders);
    }

    public function getLastRequest(): ?string
    {
        return $this->lastRequest;
    }

    public function getLastResponse(): ?string
    {
        return $this->lastResponse;
    }

    public function getLastRequestId(): string
    {
        return $this->requestId;
    }

    public function getTimingReport(): string
    {
        $tot = $this->endTs - $this->startTs;
        $gen = $this->beforeCallTs - $this->startTs;
        $call = $this->afterCallTs - $this->beforeCallTs;
        $parse = $this->endTs - $this->afterCallTs;
        $tot_ms = round($tot / 1000000);
        $gen_ms = round($gen / 1000000, 3);
        $call_ms = round($call / 1000000);
        $parse_ms = round($parse / 1000000, 3);
        return "{$tot_ms}ms (gen: {$gen_ms}ms, call: {$call_ms}ms, parse: {$parse_ms}ms)";
    }

    protected function startRequest(string $opname): void
    {
        $this->opname = $opname;
        $this->startTs = hrtime(true);
        // we could add a timer start here
        $this->lastRequest = null;
        $this->lastResponse = null;
    }

    protected function endRequest()
    {
        // could collect timing here and do some logging
        $this->endTs = hrtime(true);
    }

    protected function processServerTimingHeader(array $serverTimingHeaderValues): void
    {
        // inherit to process these values
    }

    protected function processServiceVersionHeader(array $serviceVersionHeaderValues): void
    {
        // inherit to process these values
    }

    protected function communicate(string $method, string $request, ?string $requestId = null): string
    {
        $this->lastRequest = $request;
        $this->beforeCallTs = hrtime(true);
        try {
            $response = $this->client->post("/", [
                'body' => $request,
                'headers' => $this->buildRequestHeaders($method, $requestId),
                'connect_timeout' => $this->connectTimeout,
                'timeout' => $this->timeout,
            ]);
            $this->afterCallTs = hrtime(true);
            $this->processServerTimingHeader($response->getHeader('Server-Timing'));
            $this->processServiceVersionHeader($response->getHeader('Mplus-Service-Version'));
            if ($response->getStatusCode() === 200) {
                $this->lastResponse = $response->getBody()->getContents();
                return $this->lastResponse;
            } else {
                throw new SoapCommunicationException("Received unexpected HTTP status code: " . $response->getStatusCode());
            }
        }
        catch (ServerException $e) {
            $this->afterCallTs = hrtime(true);
            $this->processServiceVersionHeader($e->getResponse()->getHeader('Mplus-Service-Version'));
            // A ServerException (HTTP 500) can potentially contain a SOAP Body which
            // we will try to parse here so that we may rethrow it as a SoapFaultException
            $res = $this->parser->parse($e->getResponse()->getBody()->getContents());
            if ($res instanceof SoapFault) {
                throw $this->createSoapFaultException($e, $res);
            }
            else {
                $errorMessage = sprintf('ServerException : %s', $e->getMessage());
                throw new SoapCommunicationException($errorMessage, $e->getCode(), $e, $this->getLastRequestId());
            }
        }
        catch (\Exception $e) {
            $errorMessage = sprintf('%s : %s', get_class($e), $e->getMessage());
            throw new SoapCommunicationException($errorMessage, $e->getCode(), $e, $this->getLastRequestId());
        }
    }

    protected function createSoapFaultException(ServerException $e, SoapFault $res): Exception
    {
        $errorMessage = "[{$res->faultcode}] {$this->opname}: {$res->faultstring}";

        // str_starts_with because a faultcode can have multiple parts like Client.Authentication
        if (str_starts_with($res->faultcode, 'Client'))
            return new SoapClientException($errorMessage, $res->faultcode, $e->getCode(), $e, $this->getLastRequestId());
        else if (str_starts_with($res->faultcode, 'Server'))
            return new SoapServerException($errorMessage, $res->faultcode, $e->getCode(), $e, $this->getLastRequestId());
        else
            return new SoapFaultException($errorMessage, $res->faultcode, $e->getCode(), $e, $this->getLastRequestId());
    }

    /**
     * buildRequestHeaders
     * Builds the request headers necessary for the SOAP call
     *
     * @param string $method            The method
     * @param string $requestId         Optional : The requestId, here you can add an reference for easy debugging
     * @return array Request headers
     */
    protected function buildRequestHeaders(string $method, ?string $requestId = null): array
    {
        $this->requestId = $requestId ?? uniqid("mpac_");
        return array_merge([
            'SOAPAction' => $method,
            'X-Request-Id' => $this->requestId,
        ], $this->additionalRequestHeaders);
    }
}
