<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuiserieRepository")
 */
class Menuiserie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $dimensionsBoisRouge;

    /**
     * @ORM\Column(type="integer")
     */
    private $dimensionsBoisHetre;

    /**
     * @ORM\Column(type="integer")
     */
    private $dimensionsAluminium;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDimensionsBoisRouge(): ?int
    {
        return $this->dimensionsBoisRouge;
    }

    public function setDimensionsBoisRouge(int $dimensionsBoisRouge): self
    {
        $this->dimensionsBoisRouge = $dimensionsBoisRouge;

        return $this;
    }

    public function getDimensionsBoisHetre(): ?int
    {
        return $this->dimensionsBoisHetre;
    }

    public function setDimensionsBoisHetre(int $dimensionsBoisHetre): self
    {
        $this->dimensionsBoisHetre = $dimensionsBoisHetre;

        return $this;
    }

    public function getDimensionsAluminium(): ?int
    {
        return $this->dimensionsAluminium;
    }

    public function setDimensionsAluminium(int $dimensionsAluminium): self
    {
        $this->dimensionsAluminium = $dimensionsAluminium;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
    
}
