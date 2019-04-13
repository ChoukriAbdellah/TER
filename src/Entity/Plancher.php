<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlancherRepository")
 */
class Plancher
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $plancherVs;

    /**
     * @ORM\Column(type="float")
     */
    private $plancherEtage;

    /**
     * @ORM\Column(type="float")
     */
    private $plancherTerrasse;

    /**
     * @ORM\Column(type="float")
     */
    private $longueurEntrevous;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlancherVs(): ?float
    {
        return $this->plancherVs;
    }

    public function setPlancherVs(float $plancherVs): self
    {
        $this->plancherVs = $plancherVs;

        return $this;
    }

    public function getPlancherEtage(): ?float
    {
        return $this->plancherEtage;
    }

    public function setPlancherEtage(float $plancherEtage): self
    {
        $this->plancherEtage = $plancherEtage;

        return $this;
    }

    public function getPlancherTerrasse(): ?float
    {
        return $this->plancherTerrasse;
    }

    public function setPlancherTerrasse(float $plancherTerrasse): self
    {
        $this->plancherTerrasse = $plancherTerrasse;

        return $this;
    }

    public function getLongueurEntrevous(): ?float
    {
        return $this->longueurEntrevous;
    }

    public function setLongueurEntrevous(float $longueurEntrevous): self
    {
        $this->longueurEntrevous = $longueurEntrevous;

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
