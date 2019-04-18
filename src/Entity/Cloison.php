<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CloisonsRepository")
 */
class Cloison
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
    private $typeCloisons;

    /**
     * @ORM\Column(type="float")
     */
    private $surfaceTotale;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCloisons(): ?string
    {
        return $this->typeCloisons;
    }

    public function setTypeCloisons(string $typeCloisons): self
    {
        $this->typeCloisons = $typeCloisons;

        return $this;
    }

    public function getSurfaceTotale(): ?float
    {
        return $this->surfaceTotale;
    }

    public function setSurfaceTotale(float $surfaceTotale): self
    {
        $this->surfaceTotale = $surfaceTotale;

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
