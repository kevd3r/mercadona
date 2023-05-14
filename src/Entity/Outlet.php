<?php

namespace App\Entity;

use App\Repository\OutletRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OutletRepository::class)]
class Outlet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $percentOff = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\OneToOne(mappedBy: 'outlet', cascade: ['persist', 'remove'])]
    private ?Products $products = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPercentOff(): ?int
    {
        return $this->percentOff;
    }

    public function setPercentOff(int $percentOff): self
    {
        $this->percentOff = $percentOff;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): self
    {
        // unset the owning side of the relation if necessary
        if ($products === null && $this->products !== null) {
            $this->products->setOutlet(null);
        }

        // set the owning side of the relation if necessary
        if ($products !== null && $products->getOutlet() !== $this) {
            $products->setOutlet($this);
        }

        $this->products = $products;

        return $this;
    }
}
