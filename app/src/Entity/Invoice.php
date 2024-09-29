<?php

namespace App\Entity;

use App\Enum\InvoiceStatusEnum;
use App\Repository\InvoiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
class Invoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', enumType: InvoiceStatusEnum::class)]
    private InvoiceStatusEnum $status;

    #[ORM\Column(length: 3, nullable: true)]
    private ?string $currency = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $requestData = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $responseData = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $qrCode = null;

    #[ORM\Column(type: Types::FLOAT, options: ['default' => 0])]
    private float $amount = 0;

    #[ORM\OneToMany(targetEntity: Callback::class, mappedBy: 'invoice', cascade: ['persist', 'remove'])]
    private Collection $callbacks;

    public function __construct()
    {
        $this->callbacks = new ArrayCollection();
        $this->status = InvoiceStatusEnum::STATUS_CREATED;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): InvoiceStatusEnum
    {
        return $this->status;
    }

    public function setStatus(InvoiceStatusEnum $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): static
    {
        $this->currency = $currency;

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

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCallbacks(): Collection
    {
        return $this->callbacks;
    }

    public function addCallback(Callback $callback): static
    {
        if (!$this->callbacks->contains($callback)) {
            $this->callbacks->add($callback);
            $callback->setInvoice($this);
        }

        return $this;
    }

    public function removeCallback(Callback $callback): static
    {
        if ($this->callbacks->removeElement($callback)) {
            // Set the owning side to null (unless already changed)
            if ($callback->getInvoice() === $this) {
                $callback->setInvoice(null);
            }
        }

        return $this;
    }
}
