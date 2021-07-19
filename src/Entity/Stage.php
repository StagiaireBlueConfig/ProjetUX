<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StageRepository::class)
 */
class Stage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreLimit;

    /**
     * @ORM\Column(type="integer")
     */
    private $responsableAtelier;

    /**
     * @ORM\Column(type="integer")
     */
    private $responsableQualite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreLimit(): ?int
    {
        return $this->nombreLimit;
    }

    public function setNombreLimit(int $nombreLimit): self
    {
        $this->nombreLimit = $nombreLimit;

        return $this;
    }

    public function getResponsableAtelier(): ?int
    {
        return $this->responsableAtelier;
    }

    public function setResponsableAtelier(int $responsableAtelier): self
    {
        $this->responsableAtelier = $responsableAtelier;

        return $this;
    }

    public function getResponsableQualite(): ?int
    {
        return $this->responsableQualite;
    }

    public function setResponsableQualite(int $responsableQualite): self
    {
        $this->responsableQualite = $responsableQualite;

        return $this;
    }
}
