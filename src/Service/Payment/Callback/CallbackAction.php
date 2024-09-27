<?php

namespace App\Service\Payment\Callback;

use App\DTO\CallbackDTO;
use App\Entity\Callback;
use App\Enum\InvoiceStatusEnum;
use App\Exception\PaymentProviderException;
use App\Repository\InvoiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class CallbackAction
{
    public function __construct(
        protected readonly InvoiceRepository      $invoiceRepository,
        protected readonly EntityManagerInterface $em,
        protected readonly SerializerInterface    $serializer,
    )
    {
    }

    public function handle(CallbackDTO $callbackDTO): Callback
    {
        $invoice = $this->invoiceRepository->find($callbackDTO->getMerchantOrderId());

        if (!$invoice) {
            throw new PaymentProviderException('Invoice not found', ['id' => $callbackDTO->getMerchantOrderId()], 404);
        }

        $status = $callbackDTO->getStatus() ?? InvoiceStatusEnum::STATUS_ERROR->value;
        $invoice->setStatus($status);

        $callback = new Callback();
        $callback->setInvoice($invoice);
        $callback->setRawData($callbackDTO->getRawData());
        $callback->setSignature($callbackDTO->getSignature());
        $callback->setStatus($status);
        $this->em->persist($callback);
        $this->em->flush();

        return $callback;
    }
}