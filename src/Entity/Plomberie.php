<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlomberieRepository")
 */
class Plomberie
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
    private $nbMetreTuyau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeTuyau;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbRobinets;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbWC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeChauffageEau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCompteur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbBaignoire;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbDouche;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbMetreTuyau(): ?float
    {
        return $this->nbMetreTuyau;
    }

    public function setNbMetreTuyau(float $nbMetreTuyau): self
    {
        $this->nbMetreTuyau = $nbMetreTuyau;

        return $this;
    }

    public function getTypeTuyau(): ?string
    {
        return $this->typeTuyau;
    }

    public function setTypeTuyau(string $typeTuyau): self
    {
        $this->typeTuyau = $typeTuyau;

        return $this;
    }

    public function getNbRobinets(): ?int
    {
        return $this->nbRobinets;
    }

    public function setNbRobinets(int $nbRobinets): self
    {
        $this->nbRobinets = $nbRobinets;

        return $this;
    }

    public function getNbWC(): ?int
    {
        return $this->nbWC;
    }

    public function setNbWC(int $nbWC): self
    {
        $this->nbWC = $nbWC;

        return $this;
    }

    public function getTypeChauffageEau(): ?string
    {
        return $this->typeChauffageEau;
    }

    public function setTypeChauffageEau(string $typeChauffageEau): self
    {
        $this->typeChauffageEau = $typeChauffageEau;

        return $this;
    }

    public function getTypeCompteur(): ?string
    {
        return $this->typeCompteur;
    }

    public function setTypeCompteur(string $typeCompteur): self
    {
        $this->typeCompteur = $typeCompteur;

        return $this;
    }

    public function getNbBaignoire(): ?int
    {
        return $this->nbBaignoire;
    }

    public function setNbBaignoire(int $nbBaignoire): self
    {
        $this->nbBaignoire = $nbBaignoire;

        return $this;
    }

    public function getNbDouche(): ?int
    {
        return $this->nbDouche;
    }

    public function setNbDouche(int $nbDouche): self
    {
        $this->nbDouche = $nbDouche;

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
