<?php

namespace App\PaymentProvider;

use App\Entity\Invoice;

interface ProviderInterface
{
    public function prepareInvoice(Invoice $invoice): object;
}