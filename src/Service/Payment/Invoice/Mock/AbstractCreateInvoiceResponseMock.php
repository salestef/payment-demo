<?php

namespace App\Service\Payment\Invoice\Mock;

use App\Entity\Invoice;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractCreateInvoiceResponseMock implements ResponseInterface, MockInterface
{
    protected array $mock = [];

    abstract public function getStatusCode(): int;

    public function initMock(Invoice $invoice): self
    {
        $this->mock = $this->setMock($invoice);

        return $this;
    }

    public function mock(): array
    {
        if(empty($this->mock)) {
            throw new \Exception('Internal error', 500);
        }

        return $this->mock;
    }


    public function getHeaders(bool $throw = true): array
    {
        return [
            'Content-Type' => 'application/json',
        ];
    }

    public function toArray(bool $throw = true): array
    {
        return json_decode($this->getContent(), true);
    }

    public function getContent(bool $throw = true): string
    {
        return '';
    }

    public function cancel(): void
    {
    }

    public function getInfo(?string $type = null): mixed
    {
        return null;
    }
}