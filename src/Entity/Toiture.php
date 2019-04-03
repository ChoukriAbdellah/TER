<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtudeSolRepository")
 */
class Toiture // vasi essaye
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
    private $typeToit;
    private $degPente;
    private $renforcement;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeToit(): ?string
    {
        return $this->typeToit; 
    }

    public function setTypeToit(string $typeToit): self
    {
        $this->typeToit = $typeToit;

        return $this;
    }
    public function getdegPente(): ?int
    {
        return $this->degPente; 
    }

    public function setdegPente(int $degPente): self
    {
        $this->degPente = $degPente;

        return $this;
    }
    public function getrenforcement(): ?boolean
    {
        return $this->renforcement; 
    }

    public function setrenforcement(boolean $renforcement): self
    {
        $this->renforcement = $renforcement;

        return $this;
    }
}
