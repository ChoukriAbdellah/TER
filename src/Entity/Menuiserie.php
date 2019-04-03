<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtudeSolRepository")
 */
class Menuiserie// vasi essaye
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
        private $dimensionCuivre;
        private $dimensionBois;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDimCuivre(): ?string
    {
        return $this->dimensionCuivre; 
    }

    public function setDimCuivre(string $DimCuivre): self
    {
        $this->dimensionCuivre = $DimCuivre;

        return $this;
    }
    public function getDimBois(): ?string
    {
        return $this->dimensionBois; 
    }

    public function setDimBois(string $DimBois): self
    {
        $this->dimensionBois = $DimBois;

        return $this;
    }
}
