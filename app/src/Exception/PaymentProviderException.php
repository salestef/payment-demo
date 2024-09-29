<?php

namespace App\Exception;

use Exception;

class PaymentProviderException extends Exception
{
    protected $responseDetails;

    public function __construct(string $message, array $responseDetails = [], int $code = 422, Exception $previous = null)
    {
        $this->responseDetails = $responseDetails;
        parent::__construct($message, $code, $previous);
    }

    public function getResponseDetails(): array
    {
        return $this->responseDetails;
    }
}
