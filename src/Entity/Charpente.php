<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CharpenteRepository")
 */
class Charpente
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
    private $typeCharpente;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $formeCharpente;

    /**
     * @ORM\Column(type="float")
     */
    private $nbMC;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCharpente(): ?string
    {
        return $this->typeCharpente;
    }

    public function setTypeCharpente(string $typeCharpente): self
    {
        $this->typeCharpente = $typeCharpente;

        return $this;
    }

    public function getFormeCharpente(): ?string
    {
        return $this->formeCharpente;
    }

    public function setFormeCharpente(string $formeCharpente): self
    {
        $this->formeCharpente = $formeCharpente;

        return $this;
    }

    public function getNbMC(): ?float
    {
        return $this->nbMC;
    }

    public function setNbMC(float $nbMC): self
    {
        $this->nbMC = $nbMC;

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
