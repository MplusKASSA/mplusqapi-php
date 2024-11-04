<?php declare(strict_types=1);
namespace MplusKASSA\Wsdl2PhpGenerator;

/// Base class for soap exceptions
class SoapException extends \RuntimeException {
    private string $requestId;
    
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL, string $requestId = "") {
        parent::__construct($message, $code, $previous);
        $this->requestId = $requestId;
    }
    
    public function getRequestId() {
        return $this->requestId;
    }
}

/// Exception type for soap faults which actualy come from the soap service
class SoapFaultException extends SoapException {
    private string $faultCode;

    public function __construct(string $message, string $faultcode, int $code = 0, \Throwable $previous = NULL, string $requestId = "") {
        parent::__construct($message, $code, $previous, $requestId);
        $this->faultCode = $faultcode;
    }
    public function getFaultCode() {
        return $this->faultCode;
    }
}

/// Server signalled is a problem with the request. The request probably needs to be modified.
class SoapClientException extends SoapFaultException {
    public function __construct(string $message, string $faultcode, int $code = 0, \Throwable $previous = NULL, string $requestId = "") {
        parent::__construct($message, $faultcode, $code, $previous, $requestId);
    }

}

/// Server signalled an error on its side, the problem is probably server side and call can be retried later
class SoapServerException extends SoapFaultException {
    public function __construct(string $message, string $faultcode, int $code = 0, \Throwable $previous = NULL, string $requestId = "") {
        parent::__construct($message, $faultcode, $code, $previous, $requestId);
    }
}


/// Exception type for server errors outside the soap layer.
class SoapCommunicationException extends SoapException {
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL, string $requestId = "") {
        parent::__construct($message, $code, $previous, $requestId);
    }
}

/// This type is thrown when during the process of converting the request parameters to XML there is an error.
class SoapSerializationException extends SoapException {
}

/// This type is thrown when during parsing of the response there is an error.
class SoapDeserializationException extends SoapException {
}