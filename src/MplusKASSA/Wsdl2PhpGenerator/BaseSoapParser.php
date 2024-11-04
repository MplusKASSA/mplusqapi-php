<?php declare(strict_types=1);
namespace MplusKASSA\Wsdl2PhpGenerator;
use Brick\Math\BigDecimal;

class SoapFault {
    public string $faultcode = '';
    public string $faultstring = '';
    public string $faultactor = '';
    public string $detail = '';
};

abstract class BaseSoapParser {
    const SOAP_ENV_URI = "http://schemas.xmlsoap.org/soap/envelope/";

    protected function load_string_property(\XMLReader $in): ?string
    {
        if ($in->isEmptyElement) {
            return null;
        }
        $n = $in->name;
        $s = '';
        while ($in->read()) {
            switch ($in->nodeType) {
                case \XMLReader::END_ELEMENT:
                    if ($in->name == $n)
                        return $s;
                break;
                case \XMLReader::TEXT:
                    $s .= $in->value;
                break;
            }
        }

        throw new \Exception("Failed to detect end tag?!");
    }

    protected function load_int_property(\XMLReader $in) : int
    {
        return (int)$this->load_string_property($in);
    }

    protected function load_bool_property(\XMLReader $in) : bool
    {
        return ($this->load_string_property($in) == "true");
    }

    protected function load_BigDecimal_property(\XMLReader $in) : BigDecimal
    {
        return BigDecimal::of($this->load_string_property($in));
    }

    protected function load_Date_property(\XMLReader $in) : \DateTime
    {
        // Note the | at the end is to reset all other fields which for some insane reason are filled with the current time
        $v = $this->load_string_property($in);
        $s = \DateTime::createFromFormat('Y-m-d|', $v);
        if ($s === false) {
            throw new \Exception("Failed to parse $v as a date");
        }
        return $s;
    }

    protected function load_DateTime_property(\XMLReader $in) : \DateTime
    {
        $v = $this->load_string_property($in);
        $s = \DateTime::createFromFormat('Y-m-d?H:i:s', $v);
        if ($s === false) {
            throw new \Exception("Failed to parse $v as a datetime");
        }
        return $s;
    }

    abstract protected function loadSoapObjectByName(\XMLReader $in);

    private function parseSoapFault(\XMLReader $in) : SoapFault
    {
        $sf = new SoapFault();
        while ($in->read())
        {
            switch ($in->nodeType) {
                case \XMLReader::ELEMENT:
                    switch ($in->localName) {
                        case 'faultcode':
                            $sf->faultcode = $this->StripNamespace($this->load_string_property($in));
                            break;
                        case 'faultstring':
                            $sf->faultstring = $this->load_string_property($in);
                            break;
                        case 'faultactor':
                            $sf->faultactor = $this->load_string_property($in);
                            break;
                        case 'detail':
                            $sf->detail = $this->load_string_property($in);
                            break;
                    }
                    break;
            }
        }

        return $sf;
    }

    private function StripNamespace(string $code)
    {
        $pos = strpos($code, ':');
        if ($pos !== false)
        {
            return substr($code, $pos + 1);
        }
        return $code;
    }

    private function parseSoapBody(\XMLReader $in)
    {
        while ($in->read())
        {
            switch ($in->nodeType) {
                case \XMLReader::ELEMENT:
                    if ($in->namespaceURI === BaseSoapParser::SOAP_ENV_URI && $in->localName === 'Fault') {
                        return $this->parseSoapFault($in);
                    }
                    else {
                        // Should be on response element
                        // should also be the only element in the body so we are finished after this
                        return $this->loadSoapObjectByName($in);
                    }
                    break;
            }
        }
    }

    public function parseSoapResponse(\XMLReader $in)
    {
        while ($in->read())
        {
            switch ($in->nodeType) {
                case \XMLReader::ELEMENT:
                    switch ($in->namespaceURI) {
                        case BaseSoapParser::SOAP_ENV_URI:
                            switch ($in->localName) {
                                case 'Envelope':
                                    // continue to next node
                                break;
                                case 'Header':
                                    // todo, what should we do with this one?
                                break;
                                case 'Body':
                                    return $this->parseSoapBody($in);
                                }
                        break;
                    }
                break;
            }
        }
        return null;
    }

    public function parse(string $in)
    {
        try {
            $r = new \XMLReader();
            $r->xml($in);
            return $this->parseSoapResponse($r);
        } catch (\Exception $e) {
            throw new SoapDeserializationException('Error while parsing soap response', 0, $e);
        }
    }
}
