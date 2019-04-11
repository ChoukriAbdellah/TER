<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ToitureRepository")
 */
class Toiture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeToit;

    /**
     * @ORM\Column(type="integer")
     */
    private $degPente;

    /**
     * @ORM\Column(type="boolean")
     */
    private $renforcement;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeToit(): ?string
    {
        return $this->typeToit;
    }

    public function setTypeToit(string $typeToit): self
    {
        $this->typeToit = $typeToit;

        return $this;
    }

    public function getDegPente(): ?int
    {
        return $this->degPente;
    }

    public function setDegPente(int $degPente): self
    {
        $this->degPente = $degPente;

        return $this;
    }

    public function getRenforcement(): ?bool
    {
        return $this->renforcement;
    }

    public function setRenforcement(bool $renforcement): self
    {
        $this->renforcement = $renforcement;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
