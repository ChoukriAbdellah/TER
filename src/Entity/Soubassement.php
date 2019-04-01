<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SoubassementRepository")
 */
class Soubassement
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
    private $typeSoubassement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeSoubassement(): ?string
    {
        return $this->typeSoubassement;
    }

    public function setTypeSoubassement(string $typeSoubassement): self
    {
        $this->typeSoubassement = $typeSoubassement;

        return $this;
    }
}
