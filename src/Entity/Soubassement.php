<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SoubassementRepository")
 */
class Soubassement
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
    private $typeSoubassement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $materielUtilise;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tractopelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $camion_benne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $betonniere;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeSoubassement(): ?string
    {
        return $this->typeSoubassement;
    }

    public function setTypeSoubassement(string $typeSoubassement): self
    {
        $this->typeSoubassement = $typeSoubassement;

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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTractopelle(): ?string
    {
        return $this->tractopelle;
    }

    public function setTractopelle(?string $tractopelle): self
    {
        $this->tractopelle = $tractopelle;

        return $this;
    }

    public function getCamionBenne(): ?string
    {
        return $this->camion_benne;
    }

    public function setCamionBenne(?string $camion_benne): self
    {
        $this->camion_benne = $camion_benne;

        return $this;
    }

    public function getBetonniere(): ?string
    {
        return $this->betonniere;
    }

    public function setBetonniere(?string $betonniere): self
    {
        $this->betonniere = $betonniere;

        return $this;
    }
}

