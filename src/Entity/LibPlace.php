<?php

namespace App\Entity;

use App\Repository\LibPlaceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LibPlaceRepository::class)
 */
class LibPlace
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $city;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $gpsLtd;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $gpsLgt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $information;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $illustration;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $UpdatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zipCode;
    }

    public function setZipCode(int $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getGpsLtd(): ?float
    {
        return $this->gpsLtd;
    }

    public function setGpsLtd(?float $gpsLtd): self
    {
        $this->gpsLtd = $gpsLtd;

        return $this;
    }

    public function getGpsLgt(): ?float
    {
        return $this->gpsLgt;
    }

    public function setGpsLgt(?float $gpsLgt): self
    {
        $this->gpsLgt = $gpsLgt;

        return $this;
    }

    public function getInformation(): ?string
    {
        return $this->information;
    }

    public function setInformation(?string $information): self
    {
        $this->information = $information;

        return $this;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(?string $illustration): self
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $UpdatedAt): self
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }
}
