<?php

namespace App\Entity;

use App\Repository\FilmsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmsRepository::class)]
class Films
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 500)]
    private ?string $description = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $age_mini = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $note = null;

    #[ORM\Column]
    private ?bool $coup_coeur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_sortie = null;

    #[ORM\Column]
    private array $Genre = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAgeMini(): ?int
    {
        return $this->age_mini;
    }

    public function setAgeMini(int $age_mini): static
    {
        $this->age_mini = $age_mini;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function isCoupCoeur(): ?bool
    {
        return $this->coup_coeur;
    }

    public function setCoupCoeur(bool $coup_coeur): static
    {
        $this->coup_coeur = $coup_coeur;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(\DateTimeInterface $date_sortie): static
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getGenre(): array
    {
        return $this->Genre;
    }

    public function setGenre(array $Genre): static
    {
        $this->Genre = $Genre;

        return $this;
    }
}
