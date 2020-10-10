<?php

namespace App\Entity;

use App\Repository\TypePatientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypePatientRepository::class)
 */
class TypePatient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Abonne::class)
     */
    private $abonne;

    /**
     * @ORM\ManyToOne(targetEntity=Privee::class)
     */
    private $privee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAbonne(): ?Abonne
    {
        return $this->abonne;
    }

    public function setAbonne(?Abonne $abonne): self
    {
        $this->abonne = $abonne;

        return $this;
    }

    public function getPrivee(): ?Privee
    {
        return $this->privee;
    }

    public function setPrivee(?Privee $privee): self
    {
        $this->privee = $privee;

        return $this;
    }
}
