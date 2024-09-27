<?php

namespace App\Enum;

enum InvoiceStatusEnum: string
{
    case STATUS_CREATED = 'CREATED';
    case STATUS_PENDING = 'PENDING';
    case STATUS_SUCCESSFUL = 'SUCCESSFUL';
    case STATUS_ERROR = 'ERROR';
    case STATUS_EXPIRED = 'EXPIRED';
    case STATUS_REJECTED = 'REJECTED';
}
