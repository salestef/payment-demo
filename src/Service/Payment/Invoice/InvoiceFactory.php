<?php

namespace App\Service\Payment\Invoice;

use App\DTO\InvoiceDTO;
use App\Entity\Invoice;
use App\Enum\InvoiceStatusEnum;
use Doctrine\ORM\EntityManagerInterface;

class InvoiceFactory
{
    public function __construct(
        private readonly EntityManagerInterface $em,
    )
    {
    }

    public function make(InvoiceDTO $dto): Invoice
    {
        $invoice = (new Invoice())
            ->setAmount($dto->getAmount())
            ->setStatus(InvoiceStatusEnum::STATUS_CREATED->value);

        $this->em->persist($invoice);
        $this->em->flush();

        return $invoice;
    }
}