<?php

namespace App\Entity;

use App\Repository\BonMedicalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BonMedicalRepository::class)
 */
class BonMedical
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $numBon;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomAgent;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $matAgent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getNumBon(): ?string
    {
        return $this->numBon;
    }

    public function setNumBon(string $numBon): self
    {
        $this->numBon = $numBon;

        return $this;
    }

    public function getNomAgent(): ?string
    {
        return $this->nomAgent;
    }

    public function setNomAgent(string $nomAgent): self
    {
        $this->nomAgent = $nomAgent;

        return $this;
    }

    public function getMatAgent(): ?string
    {
        return $this->matAgent;
    }

    public function setMatAgent(string $matAgent): self
    {
        $this->matAgent = $matAgent;

        return $this;
    }
}
