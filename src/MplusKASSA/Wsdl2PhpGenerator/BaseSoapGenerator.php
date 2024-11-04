<?php declare(strict_types=1);
namespace MplusKASSA\Wsdl2PhpGenerator;

use XMLWriter;
use Brick\Math\BigDecimal;

abstract class BaseSoapGenerator {
    const SOAP_ENV = 'SOAP-ENV';
    const TNS = 'ns1';
    protected string $targetNamespace;
    protected bool $printPretty;
    public XMLWriter $out;

    public function __construct(string $target_namespace, bool $pretty = false) {
        $this->targetNamespace = $target_namespace;
        $this->printPretty = $pretty;
    }

    public function writeMessageStart() {
        $out = new \XMLWriter();
        if ($out->openMemory() === false) throw new \Exception('XMLWriter::openMemory failed');
        $out->setIndent($this->printPretty);
        $this->out = $out;
        
        $this->out->startDocument('1.0', 'utf-8');
        $this->out->startElementNs(self::SOAP_ENV, 'Envelope', null);
        $this->out->writeAttribute('xmlns:' . self::SOAP_ENV, 'http://schemas.xmlsoap.org/soap/envelope/');
        $this->out->writeAttribute('xmlns:' . self::TNS, $this->targetNamespace);
        
        $this->out->writeElementNs(self::SOAP_ENV, 'Header', null, null);
        $this->out->startElementNs(self::SOAP_ENV, 'Body', null);
    }

    public function writeMessageEnd() {
        $this->out->endElement(); // Body
        $this->out->endElement(); // Envelope
        $this->out->endDocument();
    }

    public function writeBool(string $elem, bool $b) : void 
    {
        $this->out->writeElementNs(self::TNS, $elem, null, $b == true ? 'true' : 'false');
    }

    public function writeBigDecimal(string $elem, BigDecimal $d) : void
    {
        $this->out->writeElementNs(self::TNS, $elem, null, $d->__toString());
    }

    public function writeDate(string $elem, \DateTime $d) : void
    {
        $this->out->writeElementNs(self::TNS, $elem, null, $d->format('Y-m-d'));
    }

    public function writeDateTime(string $elem, \DateTime $d) : void
    {
        $this->out->writeElementNs(self::TNS, $elem, null, $d->format('Y-m-d') . 'T'. $d->format('H:i:s'));
    }

    public function writeInt(string $elem, int $d) : void
    {
        $this->out->writeElementNs(self::TNS, $elem, null, strval($d));
    }

    public function writeValueAndScale(string $valfield, string $scalefield, BigDecimal $d, int $defScale) : void
    {
        if ($scalefield == "") {
            $tmp = $d->toScale($defScale);
            $this->writeInt($valfield, $tmp->getUnscaledValue()->toInt());
        }
        else {
            $this->writeInt($valfield, $d->getUnscaledValue()->toInt());
            $this->writeInt($scalefield, $d->getScale());
        }
    }
}