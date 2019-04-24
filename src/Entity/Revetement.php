<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RevetementRepository")
 */
class Revetement
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
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $surfRevetClassique;

    /**
     * @ORM\Column(type="integer")
     */
    private $surfRevetMotif;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSurfRevetClassique(): ?int
    {
        return $this->surfRevetClassique;
    }

    public function setSurfRevetClassique(int $surfRevetClassique): self
    {
        $this->surfRevetClassique = $surfRevetClassique;

        return $this;
    }

    public function getSurfRevetMotif(): ?int
    {
        return $this->surfRevetMotif;
    }

    public function setSurfRevetMotif(int $surfRevetMotif): self
    {
        $this->surfRevetMotif = $surfRevetMotif;

        return $this;
    }
}
