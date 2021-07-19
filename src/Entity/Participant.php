<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParticipantRepository::class)
 */
class Participant
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
    private $gender;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $contactTel;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $contactEmail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getContactTel(): ?string
    {
        return $this->contactTel;
    }

    public function setContactTel(?string $contactTel): self
    {
        $this->contactTel = $contactTel;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }
}
