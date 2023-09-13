<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $carrierName;

    /**
     * @ORM\Column(type="float")
     */
    private $carrierprice;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ispaid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    public function setCarrierName(string $carrierName): self
    {
        $this->carrierName = $carrierName;

        return $this;
    }

    public function getCarrierprice(): ?float
    {
        return $this->carrierprice;
    }

    public function setCarrierprice(float $carrierprice): self
    {
        $this->carrierprice = $carrierprice;

        return $this;
    }

    public function isIspaid(): ?bool
    {
        return $this->ispaid;
    }

    public function setIspaid(bool $ispaid): self
    {
        $this->ispaid = $ispaid;

        return $this;
    }
}
