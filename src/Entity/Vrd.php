<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VrdRepository")
 */
class Vrd
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $distanceEauPotable;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pompeRelevage;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $fosseSeptique;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $microStation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $etudeHydrogeologique;

    /**
     * @ORM\Column(type="float")
     */
    private $distanceElectricite;

    /**
     * @ORM\Column(type="float")
     */
    private $distanceTelephonique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDistanceEauPotable(): ?float
    {
        return $this->distanceEauPotable;
    }

    public function setDistanceEauPotable(?float $distanceEauPotable): self
    {
        $this->distanceEauPotable = $distanceEauPotable;

        return $this;
    }

    public function getPompeRelevage(): ?bool
    {
        return $this->pompeRelevage;
    }

    public function setPompeRelevage(?bool $pompeRelevage): self
    {
        $this->pompeRelevage = $pompeRelevage;

        return $this;
    }

    public function getFosseSeptique(): ?bool
    {
        return $this->fosseSeptique;
    }

    public function setFosseSeptique(bool $fosseSeptique): self
    {
        $this->fosseSeptique = $fosseSeptique;

        return $this;
    }

    public function getMicroStation(): ?bool
    {
        return $this->microStation;
    }

    public function setMicroStation(bool $microStation): self
    {
        $this->microStation = $microStation;

        return $this;
    }

    public function getEtudeHydrogeologique(): ?bool
    {
        return $this->etudeHydrogeologique;
    }

    public function setEtudeHydrogeologique(bool $etudeHydrogeologique): self
    {
        $this->etudeHydrogeologique = $etudeHydrogeologique;

        return $this;
    }

    public function getDistanceElectricite(): ?float
    {
        return $this->distanceElectricite;
    }

    public function setDistanceElectricite(float $distanceElectricite): self
    {
        $this->distanceElectricite = $distanceElectricite;

        return $this;
    }

    public function getDistanceTelephonique(): ?float
    {
        return $this->distanceTelephonique;
    }

    public function setDistanceTelephonique(float $distanceTelephonique): self
    {
        $this->distanceTelephonique = $distanceTelephonique;

        return $this;
    }
}
