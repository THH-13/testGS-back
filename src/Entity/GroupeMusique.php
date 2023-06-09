<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\GroupeMusiqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupeMusiqueRepository::class)]
#[ApiResource(formats: ['json'])]
class GroupeMusique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomGroupe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origine = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true )]

    private ?\DateTimeInterface $anneeDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $anneeSeparation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fondateurs = null;

    #[ORM\Column(nullable: true)]
    private ?int $membres = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $courantMusical = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $presentation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGroupe(): ?string
    {
        return $this->nomGroupe;
    }

    public function setNomGroupe(?string $nomGroupe): self
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(?string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAnneeDebut(): ?\DateTimeInterface
    {
        return $this->anneeDebut;
    }

    public function setAnneeDebut(?\DateTimeInterface $anneeDebut): self
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }

    public function getAnneeSeparation(): ?\DateTimeInterface
    {
        return $this->anneeSeparation;
    }

    public function setAnneeSeparation(?\DateTimeInterface $anneeSeparation): self
    {
        $this->anneeSeparation = $anneeSeparation;

        return $this;
    }

    public function getFondateurs(): ?string
    {
        return $this->fondateurs;
    }

    public function setFondateurs(?string $fondateurs): self
    {
        $this->fondateurs = $fondateurs;

        return $this;
    }

    public function getMembres(): ?int
    {
        return $this->membres;
    }

    public function setMembres(?int $membres): self
    {
        $this->membres = $membres;

        return $this;
    }

    public function getCourantMusical(): ?string
    {
        return $this->courantMusical;
    }

    public function setCourantMusical(?string $courantMusical): self
    {
        $this->courantMusical = $courantMusical;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(?string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }
}
