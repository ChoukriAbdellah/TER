<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VentilationRepository")
 */
class Ventilation
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
    private $typeVentilation;

    /**
     * @ORM\Column(type="integer")
     */
    private $surfaceChambreSalon;

    /**
     * @ORM\Column(type="integer")
     */
    private $surfaceCuisineWc;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeVentilation(): ?string
    {
        return $this->typeVentilation;
    }

    public function setTypeVentilation(string $typeVentilation): self
    {
        $this->typeVentilation = $typeVentilation;

        return $this;
    }

    public function getSurfaceChambreSalon(): ?int
    {
        return $this->surfaceChambreSalon;
    }

    public function setSurfaceChambreSalon(int $surfaceChambreSalon): self
    {
        $this->surfaceChambreSalon = $surfaceChambreSalon;

        return $this;
    }

    public function getSurfaceCuisineWc(): ?int
    {
        return $this->surfaceCuisineWc;
    }

    public function setSurfaceCuisineWc(int $surfaceCuisineWc): self
    {
        $this->surfaceCuisineWc = $surfaceCuisineWc;

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
