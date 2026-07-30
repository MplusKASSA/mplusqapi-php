<?php declare(strict_types=1);
// Generated code
namespace MplusKASSA\MplusQapi;
use MplusKASSA\Wsdl2PhpGenerator\BaseSoapGenerator;
use MplusKASSA\Wsdl2PhpGenerator\SoapSerializationException;
class SoapGenerator extends BaseSoapGenerator {
	public function __construct(bool $pretty = false) {
		parent::__construct('urn:mplusqapi', $pretty);
	}
	public function write(SoapObject $msg, string $elemName) : string {
		try {
			$this->writeMessageStart();
			$msg->write($this, $elemName);
			$this->writeMessageEnd();
			$s = $this->out->outputMemory(true); 
			unset($this->out);
			return $s; 
		}
		catch (\Exception $e) {
			throw new SoapSerializationException('Error while generating soap request', 0, $e);
		}
	}
}
