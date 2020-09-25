<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 */
class Patient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numFiche;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $personne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumFiche(): ?int
    {
        return $this->numFiche;
    }

    public function setNumFiche(int $numFiche): self
    {
        $this->numFiche = $numFiche;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }
}
