<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EscaliersRepository")
 */
class Escaliers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeEscalier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $materiaux;

    /**
     * @ORM\Column(type="float")
     */
    private $dimensions;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeEscalier(): ?string
    {
        return $this->typeEscalier;
    }

    public function setTypeEscalier(?string $typeEscalier): self
    {
        $this->typeEscalier = $typeEscalier;

        return $this;
    }

    public function getMateriaux(): ?string
    {
        return $this->materiaux;
    }

    public function setMateriaux(?string $materiaux): self
    {
        $this->materiaux = $materiaux;

        return $this;
    }

    public function getDimensions(): ?float
    {
        return $this->dimensions;
    }

    public function setDimensions(float $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
