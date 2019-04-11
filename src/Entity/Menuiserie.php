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
    private $dimensionBoisRouge;

    /**
     * @ORM\Column(type="integer")
     */
    private $dimensionBoisHetre;

    /**
     * @ORM\Column(type="integer")
     */
    private $dimensionAluminium;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDimensionBoisRouge(): ?int
    {
        return $this->dimensionBoisRouge;
    }

    public function setDimensionBoisRouge(int $dimensionBoisRouge): self
    {
        $this->dimensionBoisRouge = $dimensionBoisRouge;

        return $this;
    }

    public function getDimensionBoisHetre(): ?int
    {
        return $this->dimensionBoisHetre;
    }

    public function setDimensionBoisHetre(int $dimensionBoisHetre): self
    {
        $this->dimensionBoisHetre = $dimensionBoisHetre;

        return $this;
    }

    public function getDimensionAluminium(): ?int
    {
        return $this->dimensionAluminium;
    }

    public function setDimensionAluminium(int $dimensionAluminium): self
    {
        $this->dimensionAluminium = $dimensionAluminium;

        return $this;
    }
}
