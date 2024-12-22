<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $customerName = null;

    #[ORM\Column(length: 15)]
    private ?string $customerPhone = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $reservationDate = null;

    #[ORM\Column]
    private ?int $numberofGuests = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Table $diningTable = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(string $customerName): static
    {
        $this->customerName = $customerName;

        return $this;
    }

    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    public function setCustomerPhone(string $customerPhone): static
    {
        $this->customerPhone = $customerPhone;

        return $this;
    }

    public function getReservationDate(): ?\DateTimeInterface
    {
        return $this->reservationDate;
    }

    public function setReservationDate(\DateTimeInterface $reservationDate): static
    {
        $this->reservationDate = $reservationDate;

        return $this;
    }

    public function getNumberofGuests(): ?int
    {
        return $this->numberofGuests;
    }

    public function setNumberofGuests(int $numberofGuests): static
    {
        $this->numberofGuests = $numberofGuests;

        return $this;
    }

    public function getDiningTable(): ?Table
    {
        return $this->diningTable;
    }

    public function setDiningTable(?Table $diningTable): static
    {
        $this->diningTable = $diningTable;

        return $this;
    }
}
