<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
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
    private $idProprio;

    /**
     * @ORM\Column(type="integer")
     */
    private $idGrosOeuvre;

    /**
     * @ORM\Column(type="integer")
     */
    private $idSecondOeuvre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProprio(): ?int
    {
        return $this->idProprio;
    }

    public function setIdProprio(int $idProprio): self
    {
        $this->idProprio = $idProprio;

        return $this;
    }

    public function getIdGrosOeuvre(): ?int
    {
        return $this->idGrosOeuvre;
    }

    public function setIdGrosOeuvre(int $idGrosOeuvre): self
    {
        $this->idGrosOeuvre = $idGrosOeuvre;

        return $this;
    }

    public function getIdSecondOeuvre(): ?int
    {
        return $this->idSecondOeuvre;
    }

    public function setIdSecondOeuvre(int $idSecondOeuvre): self
    {
        $this->idSecondOeuvre = $idSecondOeuvre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
