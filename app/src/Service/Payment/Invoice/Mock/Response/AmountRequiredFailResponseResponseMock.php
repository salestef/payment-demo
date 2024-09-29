<?php

namespace App\Service\Payment\Invoice\Mock\Response;

use App\Entity\Invoice;
use App\Service\Payment\Invoice\Mock\AbstractCreateInvoiceResponseMock;

class AmountRequiredFailResponseResponseMock extends AbstractCreateInvoiceResponseMock
{
    public function getStatusCode(): int
    {
        return 400;
    }
    public function setMock(Invoice $invoice): array
    {
        return [
            "error" => "Amount required",
            "message" => "Amount is not set"
        ];
    }
}