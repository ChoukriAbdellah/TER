<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreparationEtAccesRepository")
 */
class PreparationEtAcces
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
    private $nb_pins;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_sapins;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_bouleaux;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_chenes;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_erables;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_frenes;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_noyers;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_autres;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_pins;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_sapins;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_bouleaux;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_chenes;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_erables;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_frenes;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_noyers;

    /**
     * @ORM\Column(type="float")
     */
    private $taille_autres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $positionTerrain;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPins(): ?int
    {
        return $this->nb_pins;
    }

    public function setNbPins(int $nb_pins): self
    {
        $this->nb_pins = $nb_pins;

        return $this;
    }

    public function getNbSapins(): ?int
    {
        return $this->nb_sapins;
    }

    public function setNbSapins(int $nb_sapins): self
    {
        $this->nb_sapins = $nb_sapins;

        return $this;
    }

    public function getNbBouleaux(): ?int
    {
        return $this->nb_bouleaux;
    }

    public function setNbBouleaux(int $nb_bouleaux): self
    {
        $this->nb_bouleaux = $nb_bouleaux;

        return $this;
    }

    public function getNbChenes(): ?int
    {
        return $this->nb_chenes;
    }

    public function setNbChenes(int $nb_chenes): self
    {
        $this->nb_chenes = $nb_chenes;

        return $this;
    }

    public function getNbErables(): ?int
    {
        return $this->nb_erables;
    }

    public function setNbErables(int $nb_erables): self
    {
        $this->nb_erables = $nb_erables;

        return $this;
    }

    public function getNbFrenes(): ?int
    {
        return $this->nb_frenes;
    }

    public function setNbFrenes(int $nb_frenes): self
    {
        $this->nb_frenes = $nb_frenes;

        return $this;
    }

    public function getNbNoyers(): ?int
    {
        return $this->nb_noyers;
    }

    public function setNbNoyers(int $nb_noyers): self
    {
        $this->nb_noyers = $nb_noyers;

        return $this;
    }

    public function getNbAutres(): ?int
    {
        return $this->nb_autres;
    }

    public function setNbAutres(int $nb_autres): self
    {
        $this->nb_autres = $nb_autres;

        return $this;
    }

    public function getTaillePins(): ?float
    {
        return $this->taille_pins;
    }

    public function setTaillePins(float $taille_pins): self
    {
        $this->taille_pins = $taille_pins;

        return $this;
    }

    public function getTailleSapins(): ?float
    {
        return $this->taille_sapins;
    }

    public function setTailleSapins(float $taille_sapins): self
    {
        $this->taille_sapins = $taille_sapins;

        return $this;
    }

    public function getTailleBouleaux(): ?float
    {
        return $this->taille_bouleaux;
    }

    public function setTailleBouleaux(float $taille_bouleaux): self
    {
        $this->taille_bouleaux = $taille_bouleaux;

        return $this;
    }

    public function getTailleChenes(): ?float
    {
        return $this->taille_chenes;
    }

    public function setTailleChenes(float $taille_chenes): self
    {
        $this->taille_chenes = $taille_chenes;

        return $this;
    }

    public function getTailleErables(): ?float
    {
        return $this->taille_erables;
    }

    public function setTailleErables(float $taille_erables): self
    {
        $this->taille_erables = $taille_erables;

        return $this;
    }

    public function getTailleFrenes(): ?float
    {
        return $this->taille_frenes;
    }

    public function setTailleFrenes(float $taille_frenes): self
    {
        $this->taille_frenes = $taille_frenes;

        return $this;
    }

    public function getTailleNoyers(): ?float
    {
        return $this->taille_noyers;
    }

    public function setTailleNoyers(float $taille_noyers): self
    {
        $this->taille_noyers = $taille_noyers;

        return $this;
    }

    public function getTailleAutres(): ?float
    {
        return $this->taille_autres;
    }

    public function setTailleAutres(float $taille_autres): self
    {
        $this->taille_autres = $taille_autres;

        return $this;
    }

    public function getPositionTerrain(): ?string
    {
        return $this->positionTerrain;
    }

    public function setPositionTerrain(string $positionTerrain): self
    {
        $this->positionTerrain = $positionTerrain;

        return $this;
    }

}
