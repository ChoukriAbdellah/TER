<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ElevationRepository")
 */
class Elevation
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
    private $nb_poutres;

    /**
     * @ORM\Column(type="float")
     */
    private $LongueurPoutre;

    /**
     * @ORM\Column(type="float")
     */
    private $TaillePoutre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeMateriauxMur;

    /**
     * @ORM\Column(type="float")
     */
    private $HauteurMur;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombreFenetre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeFenetre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeLinteaux;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPoutres(): ?int
    {
        return $this->nb_poutres;
    }

    public function setNbPoutres(int $nb_poutres): self
    {
        $this->nb_poutres = $nb_poutres;

        return $this;
    }

    public function getLongueurPoutre(): ?float
    {
        return $this->LongueurPoutre;
    }

    public function setLongueurPoutre(float $LongueurPoutre): self
    {
        $this->LongueurPoutre = $LongueurPoutre;

        return $this;
    }

    public function getTaillePoutre(): ?float
    {
        return $this->TaillePoutre;
    }

    public function setTaillePoutre(float $TaillePoutre): self
    {
        $this->TaillePoutre = $TaillePoutre;

        return $this;
    }

    public function getTypeMateriauxMur(): ?string
    {
        return $this->TypeMateriauxMur;
    }

    public function setTypeMateriauxMur(string $TypeMateriauxMur): self
    {
        $this->TypeMateriauxMur = $TypeMateriauxMur;

        return $this;
    }

    public function getHauteurMur(): ?float
    {
        return $this->HauteurMur;
    }

    public function setHauteurMur(float $HauteurMur): self
    {
        $this->HauteurMur = $HauteurMur;

        return $this;
    }

    public function getNombreFenetre(): ?int
    {
        return $this->NombreFenetre;
    }

    public function setNombreFenetre(int $NombreFenetre): self
    {
        $this->NombreFenetre = $NombreFenetre;

        return $this;
    }

    public function getTypeFenetre(): ?string
    {
        return $this->TypeFenetre;
    }

    public function setTypeFenetre(string $TypeFenetre): self
    {
        $this->TypeFenetre = $TypeFenetre;

        return $this;
    }

    public function getTypeLinteaux(): ?string
    {
        return $this->TypeLinteaux;
    }

    public function setTypeLinteaux(string $TypeLinteaux): self
    {
        $this->TypeLinteaux = $TypeLinteaux;

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
