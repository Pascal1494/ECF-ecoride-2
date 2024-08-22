<?php

namespace App\Entity;

use App\Repository\CarpoolingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarpoolingRepository::class)]
class Carpooling
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $StartDay = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    private ?\DateTimeImmutable $startTime = null;

    #[ORM\Column(length: 255)]
    private ?string $startPlace = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $endDate = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    private ?\DateTimeImmutable $endTime = null;

    #[ORM\Column(length: 255)]
    private ?string $endPlace = null;

    #[ORM\Column]
    private ?int $PlaceNumber = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDay(): ?\DateTimeImmutable
    {
        return $this->StartDay;
    }

    public function setStartDay(\DateTimeImmutable $StartDay): static
    {
        $this->StartDay = $StartDay;

        return $this;
    }

    public function getStartTime(): ?\DateTimeImmutable
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeImmutable $startTime): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getStartPlace(): ?string
    {
        return $this->startPlace;
    }

    public function setStartPlace(string $startPlace): static
    {
        $this->startPlace = $startPlace;

        return $this;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeImmutable $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getEndTime(): ?\DateTimeImmutable
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeImmutable $endTime): static
    {
        $this->endTime = $endTime;

        return $this;
    }

    public function getEndPlace(): ?string
    {
        return $this->endPlace;
    }

    public function setEndPlace(string $endPlace): static
    {
        $this->endPlace = $endPlace;

        return $this;
    }

    public function getPlaceNumber(): ?int
    {
        return $this->PlaceNumber;
    }

    public function setPlaceNumber(int $PlaceNumber): static
    {
        $this->PlaceNumber = $PlaceNumber;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }
    
}