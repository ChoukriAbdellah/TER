<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GrosOeuvreRepository")
 */
class GrosOeuvre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idEtudeSol;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idPrepTerrain;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idExcavation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idFondations;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idSoubassement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idVRD;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idPlancher;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idElevation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idCharpente;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idToiture;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idMenuiseriesExt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtudeSol(): ?int
    {
        return $this->idEtudeSol;
    }

    public function setIdEtudeSol(?int $idEtudeSol): self
    {
        $this->idEtudeSol = $idEtudeSol;

        return $this;
    }

    public function getIdPrepTerrain(): ?int
    {
        return $this->idPrepTerrain;
    }

    public function setIdPrepTerrain(?int $idPrepTerrain): self
    {
        $this->idPrepTerrain = $idPrepTerrain;

        return $this;
    }

    public function getIdExcavation(): ?int
    {
        return $this->idExcavation;
    }

    public function setIdExcavation(?int $idExcavation): self
    {
        $this->idExcavation = $idExcavation;

        return $this;
    }

    public function getIdFondations(): ?int
    {
        return $this->idFondations;
    }

    public function setIdFondations(?int $idFondations): self
    {
        $this->idFondations = $idFondations;

        return $this;
    }

    public function getIdSoubassement(): ?int
    {
        return $this->idSoubassement;
    }

    public function setIdSoubassement(?int $idSoubassement): self
    {
        $this->idSoubassement = $idSoubassement;

        return $this;
    }

    public function getIdVRD(): ?int
    {
        return $this->idVRD;
    }

    public function setIdVRD(?int $idVRD): self
    {
        $this->idVRD = $idVRD;

        return $this;
    }

    public function getIdPlancher(): ?int
    {
        return $this->idPlancher;
    }

    public function setIdPlancher(?int $idPlancher): self
    {
        $this->idPlancher = $idPlancher;

        return $this;
    }

    public function getIdElevation(): ?int
    {
        return $this->idElevation;
    }

    public function setIdElevation(?int $idElevation): self
    {
        $this->idElevation = $idElevation;

        return $this;
    }

    public function getIdCharpente(): ?int
    {
        return $this->idCharpente;
    }

    public function setIdCharpente(?int $idCharpente): self
    {
        $this->idCharpente = $idCharpente;

        return $this;
    }

    public function getIdToiture(): ?int
    {
        return $this->idToiture;
    }

    public function setIdToiture(?int $idToiture): self
    {
        $this->idToiture = $idToiture;

        return $this;
    }

    public function getIdMenuiseriesExt(): ?int
    {
        return $this->idMenuiseriesExt;
    }

    public function setIdMenuiseriesExt(?int $idMenuiseriesExt): self
    {
        $this->idMenuiseriesExt = $idMenuiseriesExt;

        return $this;
    }
}
