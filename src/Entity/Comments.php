<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentsRepository::class)]
class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $TexteCom = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DateCom = null;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $idUser = null;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Articles $idArticles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteCom(): ?string
    {
        return $this->TexteCom;
    }

    public function setTexteCom(string $TexteCom): self
    {
        $this->TexteCom = $TexteCom;

        return $this;
    }

    public function getDateCom(): ?\DateTimeInterface
    {
        return $this->DateCom;
    }

    public function setDateCom(\DateTimeInterface $DateCom): self
    {
        $this->DateCom = $DateCom;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdArticles(): ?Articles
    {
        return $this->idArticles;
    }

    public function setIdArticles(?Articles $idArticles): self
    {
        $this->idArticles = $idArticles;

        return $this;
    }
}
