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
     * @ORM\Column(type="string", length=50)
     */
    private $numFiche;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, cascade={"persist", "remove"})
     */
    private $personne;

    /**
     * @ORM\ManyToOne(targetEntity=TypePatient::class)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumFiche(): ?string
    {
        return $this->numFiche;
    }

    public function setNumFiche(string $numFiche): self
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

    public function getType(): ?TypePatient
    {
        return $this->type;
    }

    public function setType(?TypePatient $type): self
    {
        $this->type = $type;

        return $this;
    }
}
