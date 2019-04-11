<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExcavationRepository")
 */
class Excavation
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
    private $typeTerrassement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $materielUtilise;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $coutSolPlan;
	
	
	/**
     * @ORM\Column(type="float", nullable=true)
     */
	 
	private $mursPeripherique;
	
	/**
     * @ORM\Column(type="float", nullable=true)
     */
	
	private $mursRefont;
	
	/**
     * @ORM\Column(type="float", nullable=true)
     */
	 
	private $profondeurFouille;
	
	/**
     * @ORM\Column(type="float", nullable=true)
     */
	
	private $largeurFouille;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeTerrassement(): ?string
    {
        return $this->typeTerrassement;
    }

    public function setTypeTerrassement(?string $typeTerrassement): self
    {
        $this->typeTerrassement = $typeTerrassement;

        return $this;
    }

    public function getMaterielUtilise(): ?string
    {
        return $this->materielUtilise;
    }

    public function setMaterielUtilise(?string $materielUtilise): self
    {
        $this->materielUtilise = $materielUtilise;

        return $this;
    }

    public function getCoutSolPlan(): ?float
    {
        return $this->coutSolPlan;
    }

    public function setCoutSolPlan(?float $coutSolPlan): self
    {
        $this->coutSolPlan = $coutSolPlan;

        return $this;
    }
	
	public function getMursPeripherique(): ?float
    {
        return $this->mursPeripherique;
    }

    public function setMursPeripherique(?float $mursPeripherique): self
    {
        $this->mursPeripherique = $mursPeripherique;

        return $this;
    }
	
	public function getMursRefont(): ?float
    {
        return $this->mursRefont;
    }

    public function setMursRefont(?float $mursRefont): self
    {
        $this->mursRefont = $mursRefont;

        return $this;
    }
	
	public function getProfondeurFouille(): ?float
    {
        return $this->profondeurFouille;
    }

    public function setProfondeurFouille(?float $profondeurFouille): self
    {
        $this->profondeurFouille = $profondeurFouille;

        return $this;
    }
	
	public function getLargeurFouille(): ?float
    {
        return $this->largeurFouille;
    }

    public function setLargeurFouille(?float $largeurFouille): self
    {
        $this->largeurFouille = $largeurFouille;

        return $this;
    }
}
