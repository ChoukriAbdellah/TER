<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SecondOeuvreRepository")
 */
class SecondOeuvre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idEnduitFacade;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idIsolation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idRevetement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idCloisons;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idEvacuation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idMenuiseriesInt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idEscaliers;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idPlomberie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idElectricite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idVentilation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idClimatisation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idDomotique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEnduitFacade(): ?int
    {
        return $this->idEnduitFacade;
    }

    public function setIdEnduitFacade(?int $idEnduitFacade): self
    {
        $this->idEnduitFacade = $idEnduitFacade;

        return $this;
    }

    public function getIdIsolation(): ?int
    {
        return $this->idIsolation;
    }

    public function setIdIsolation(?int $idIsolation): self
    {
        $this->idIsolation = $idIsolation;

        return $this;
    }

    public function getIdRevetement(): ?int
    {
        return $this->idRevetement;
    }

    public function setIdRevetement(?int $idRevetement): self
    {
        $this->idRevetement = $idRevetement;

        return $this;
    }

    public function getIdCloisons(): ?int
    {
        return $this->idCloisons;
    }

    public function setIdCloisons(?int $idCloisons): self
    {
        $this->idCloisons = $idCloisons;

        return $this;
    }

    public function getIdEvacuation(): ?int
    {
        return $this->idEvacuation;
    }

    public function setIdEvacuation(?int $idEvacuation): self
    {
        $this->idEvacuation = $idEvacuation;

        return $this;
    }

    public function getIdMenuiseriesInt(): ?int
    {
        return $this->idMenuiseriesInt;
    }

    public function setIdMenuiseriesInt(?int $idMenuiseriesInt): self
    {
        $this->idMenuiseriesInt = $idMenuiseriesInt;

        return $this;
    }

    public function getIdEscaliers(): ?int
    {
        return $this->idEscaliers;
    }

    public function setIdEscaliers(?int $idEscaliers): self
    {
        $this->idEscaliers = $idEscaliers;

        return $this;
    }

    public function getIdPlomberie(): ?int
    {
        return $this->idPlomberie;
    }

    public function setIdPlomberie(?int $idPlomberie): self
    {
        $this->idPlomberie = $idPlomberie;

        return $this;
    }

    public function getIdElectricite(): ?int
    {
        return $this->idElectricite;
    }

    public function setIdElectricite(?int $idElectricite): self
    {
        $this->idElectricite = $idElectricite;

        return $this;
    }

    public function getIdVentilation(): ?int
    {
        return $this->idVentilation;
    }

    public function setIdVentilation(?int $idVentilation): self
    {
        $this->idVentilation = $idVentilation;

        return $this;
    }

    public function getIdClimatisation(): ?int
    {
        return $this->idClimatisation;
    }

    public function setIdClimatisation(?int $idClimatisation): self
    {
        $this->idClimatisation = $idClimatisation;

        return $this;
    }

    public function getIdDomotique(): ?int
    {
        return $this->idDomotique;
    }

    public function setIdDomotique(?int $idDomotique): self
    {
        $this->idDomotique = $idDomotique;

        return $this;
    }
}
