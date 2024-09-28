<?php

namespace App\Service\Payment\Invoice\Mock\Response;

use App\Entity\Invoice;
use App\Service\Payment\Invoice\Mock\AbstractCreateInvoiceResponseMock;

class InvalidSignatureResponseResponseMock extends AbstractCreateInvoiceResponseMock
{

    public function getStatusCode(): int
    {
        return 400;
    }

    public function setMock(Invoice $invoice): array
    {
        return [
            "error" => "Invalid signature",
            "message" => "Invalid signature"
        ];
    }
}