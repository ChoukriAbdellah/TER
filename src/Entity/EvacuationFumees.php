<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvacuationFumeesRepository")
 */
class EvacuationFumees
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
    private $materieauUtilise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCheminee;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaterieauUtilise(): ?string
    {
        return $this->materieauUtilise;
    }

    public function setMaterieauUtilise(string $materieauUtilise): self
    {
        $this->materieauUtilise = $materieauUtilise;

        return $this;
    }

    public function getForme(): ?string
    {
        return $this->forme;
    }

    public function setForme(string $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    public function getTypeCheminee(): ?string
    {
        return $this->typeCheminee;
    }

    public function setTypeCheminee(string $typeCheminee): self
    {
        $this->typeCheminee = $typeCheminee;

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
