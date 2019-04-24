<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ElectriciteRepository")
 */
class Electricite
{

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbChauffage;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbInterrupteur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbSortieLumieres;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPriseElectrique;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbVoletRoulant;

    /**
     * @ORM\Column(type="float")
     */
    private $dimensionCable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbChauffage(): ?int
    {
        return $this->nbChauffage;
    }

    public function setNbChauffage(int $nbChauffage): self
    {
        $this->nbChauffage = $nbChauffage;

        return $this;
    }

    public function getNbInterrupteur(): ?int
    {
        return $this->nbInterrupteur;
    }

    public function setNbInterrupteur(int $nbInterrupteur): self
    {
        $this->nbInterrupteur = $nbInterrupteur;

        return $this;
    }

    public function getNbSortieLumieres(): ?int
    {
        return $this->nbSortieLumieres;
    }

    public function setNbSortieLumieres(int $nbSortieLumieres): self
    {
        $this->nbSortieLumieres = $nbSortieLumieres;

        return $this;
    }

    public function getNbPriseElectrique(): ?int
    {
        return $this->nbPriseElectrique;
    }

    public function setNbPriseElectrique(int $nbPriseElectrique): self
    {
        $this->nbPriseElectrique = $nbPriseElectrique;

        return $this;
    }

    public function getNbVoletRoulant(): ?int
    {
        return $this->nbVoletRoulant;
    }

    public function setNbVoletRoulant(int $nbVoletRoulant): self
    {
        $this->nbVoletRoulant = $nbVoletRoulant;

        return $this;
    }

    public function getDimensionCable(): ?float
    {
        return $this->dimensionCable;
    }

    public function setDimensionCable(float $dimensionCable): self
    {
        $this->dimensionCable = $dimensionCable;

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
