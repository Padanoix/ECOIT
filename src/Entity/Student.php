<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $pseudo;

    #[ORM\OneToOne(inversedBy: 'student', targetEntity: User::class, cascade: ['persist', 'remove'])]
    private $user;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $SuiviFormation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getSuiviFormation(): ?int
    {
        return $this->SuiviFormation;
    }

    public function setSuiviFormation(?int $SuiviFormation): self
    {
        $this->SuiviFormation = $SuiviFormation;

        return $this;
    }
}
