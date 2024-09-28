<?php

namespace App\Service\Payment\Invoice\Mock;

use App\Entity\Invoice;

interface MockInterface
{
    public function setMock(Invoice $invoice): array;

    public function mock(): array;
}