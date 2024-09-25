<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
class Invoice
{
    public const STATUS_CREATED = 'CREATED';
    public const STATUS_PENDING = 'PENDING';
    public const STATUS_SUCCESSFUL = 'SUCCESSFUL';
    public const STATUS_ERROR = 'ERROR';
    public const STATUS_EXPIRED = 'EXPIRED';
    public const STATUS_REJECTED = 'REJECTED';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

//    #[ORM\Column(type: 'string', enumType: InvoiceStatus::class)]
    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $requestData = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $responseData = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $qrCode = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getRequestData(): ?string
    {
        return $this->requestData;
    }

    public function setRequestData(?string $requestData): static
    {
        $this->requestData = $requestData;

        return $this;
    }

    public function getResponseData(): ?string
    {
        return $this->responseData;
    }

    public function setResponseData(?string $responseData): static
    {
        $this->responseData = $responseData;

        return $this;
    }

    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    public function setQrCode(?string $qrCode): static
    {
        $this->qrCode = $qrCode;

        return $this;
    }
}
