<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DomotiqueRepository")
 */
class Domotique
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
    private $regularisationChauffage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eclairageAuto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ouvertureFermetureAuto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autonomieEau;

    

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $detecteurEtAlarme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegularisationChauffage(): ?string
    {
        return $this->regularisationChauffage;
    }

    public function setRegularisationChauffage(?string $regularisationChauffage): self
    {
        $this->regularisationChauffage = $regularisationChauffage;

        return $this;
    }

    public function getEclairageAuto(): ?string
    {
        return $this->eclairageAuto;
    }

    public function setEclairageAuto(?string $eclairageAuto): self
    {
        $this->eclairageAuto = $eclairageAuto;

        return $this;
    }

    public function getOuvertureFermetureAuto(): ?string
    {
        return $this->ouvertureFermetureAuto;
    }

    public function setOuvertureFermetureAuto(?string $ouvertureFermetureAuto): self
    {
        $this->ouvertureFermetureAuto = $ouvertureFermetureAuto;

        return $this;
    }

    public function getAutonomieEau(): ?string
    {
        return $this->autonomieEau;
    }

    public function setAutonomieEau(?string $autonomieEau): self
    {
        $this->autonomieEau = $autonomieEau;

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

    public function getDetecteurEtAlarme(): ?string
    {
        return $this->detecteurEtAlarme;
    }

    public function setDetecteurEtAlarme(?string $detecteurEtAlarme): self
    {
        $this->detecteurEtAlarme = $detecteurEtAlarme;

        return $this;
    }
}
