<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IsolationRepository")
 */
class Isolation
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
    private $surfaceThermique;

    /**
     * @ORM\Column(type="integer")
     */
    private $surfacePhonique;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurfaceThermique(): ?int
    {
        return $this->surfaceThermique;
    }

    public function setSurfaceThermique(int $surfaceThermique): self
    {
        $this->surfaceThermique = $surfaceThermique;

        return $this;
    }

    public function getSurfacePhonique(): ?int
    {
        return $this->surfacePhonique;
    }

    public function setSurfacePhonique(int $surfacePhonique): self
    {
        $this->surfacePhonique = $surfacePhonique;

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
