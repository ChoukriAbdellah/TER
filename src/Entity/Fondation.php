<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FondationRepository")
 */
class Fondation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="boolean")
     */
    private $sismicite;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getSismicite(): ?bool
    {
        return $this->sismicite;
    }

    public function setSismicite(bool $sismicite): self
    {
        $this->sismicite = $sismicite;

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
