<?php

namespace App\Entity;

use App\Repository\SessionContenuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionContenuRepository::class)
 */
class SessionContenu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $codeRef;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $filePDF;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getCodeRef(): ?string
    {
        return $this->codeRef;
    }

    public function setCodeRef(?string $codeRef): self
    {
        $this->codeRef = $codeRef;

        return $this;
    }

    public function getFilePDF(): ?string
    {
        return $this->filePDF;
    }

    public function setFilePDF(?string $filePDF): self
    {
        $this->filePDF = $filePDF;

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
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
