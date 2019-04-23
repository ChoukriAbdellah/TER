<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuiseriesIntRepository")
 */
class MenuiseriesInt
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
    private $portesPleines;

    /**
     * @ORM\Column(type="integer")
     */
    private $portesVitrees;

    /**
     * @ORM\Column(type="integer")
     */
    private $portesBattantes;

    /**
     * @ORM\Column(type="integer")
     */
    private $portesCoulissantes;

    /**
     * @ORM\Column(type="integer")
     */
    private $portesPlacardPliantes;

    /**
     * @ORM\Column(type="integer")
     */
    private $portesPlacardBattantes;

    /**
     * @ORM\Column(type="integer")
     */
    private $portesPlacardCoulissantes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materieauRampes;

    /**
     * @ORM\Column(type="float")
     */
    private $tailleRampes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $materieauBalustrades;

    /**
     * @ORM\Column(type="float")
     */
    private $tailleBalustrades;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPortesPleines(): ?int
    {
        return $this->portesPleines;
    }

    public function setPortesPleines(int $portesPleines): self
    {
        $this->portesPleines = $portesPleines;

        return $this;
    }

    public function getPortesVitrees(): ?int
    {
        return $this->portesVitrees;
    }

    public function setPortesVitrees(int $portesVitrees): self
    {
        $this->portesVitrees = $portesVitrees;

        return $this;
    }

    public function getPortesBattantes(): ?int
    {
        return $this->portesBattantes;
    }

    public function setPortesBattantes(int $portesBattantes): self
    {
        $this->portesBattantes = $portesBattantes;

        return $this;
    }

    public function getPortesCoulissantes(): ?int
    {
        return $this->portesCoulissantes;
    }

    public function setPortesCoulissantes(int $portesCoulissantes): self
    {
        $this->portesCoulissantes = $portesCoulissantes;

        return $this;
    }

    public function getPortesPlacardPliantes(): ?int
    {
        return $this->portesPlacardPliantes;
    }

    public function setPortesPlacardPliantes(int $portesPlacardPliantes): self
    {
        $this->portesPlacardPliantes = $portesPlacardPliantes;

        return $this;
    }

    public function getPortesPlacardBattantes(): ?int
    {
        return $this->portesPlacardBattantes;
    }

    public function setPortesPlacardBattantes(int $portesPlacardBattantes): self
    {
        $this->portesPlacardBattantes = $portesPlacardBattantes;

        return $this;
    }

    public function getPortesPlacardCoulissantes(): ?int
    {
        return $this->portesPlacardCoulissantes;
    }

    public function setPortesPlacardCoulissantes(int $portesPlacardCoulissantes): self
    {
        $this->portesPlacardCoulissantes = $portesPlacardCoulissantes;

        return $this;
    }

    public function getMaterieauRampes(): ?string
    {
        return $this->materieauRampes;
    }

    public function setMaterieauRampes(string $materieauRampes): self
    {
        $this->materieauRampes = $materieauRampes;

        return $this;
    }

    public function getTailleRampes(): ?float
    {
        return $this->tailleRampes;
    }

    public function setTailleRampes(float $tailleRampes): self
    {
        $this->tailleRampes = $tailleRampes;

        return $this;
    }

    public function getMaterieauBalustrades(): ?string
    {
        return $this->materieauBalustrades;
    }

    public function setMaterieauBalustrades(string $materieauBalustrades): self
    {
        $this->materieauBalustrades = $materieauBalustrades;

        return $this;
    }

    public function getTailleBalustrades(): ?float
    {
        return $this->tailleBalustrades;
    }

    public function setTailleBalustrades(float $tailleBalustrades): self
    {
        $this->tailleBalustrades = $tailleBalustrades;

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
