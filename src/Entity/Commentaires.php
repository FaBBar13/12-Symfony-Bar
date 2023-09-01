<?php

namespace App\Entity;

use App\Trait\CreatedAtTrait;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use App\Repository\CommentairesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentairesRepository::class)]
#[HasLifecycleCallbacks]
class Commentaires
{

    use CreatedAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    private ?string $comment_texte = null;

    #[ORM\Column]
    private ?float $note = null;

    #[ORM\ManyToOne(inversedBy: 'comment_user')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $comment_user = null;

    #[ORM\ManyToOne(inversedBy: 'comment_bar')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Bars $comment_id_bar = null;




    public function getId(): ?int
    {
        return $this->id;
    }



    public function getCommentTexte(): ?string
    {
        return $this->comment_texte;
    }

    public function setCommentTexte(string $comment_texte): static
    {
        $this->comment_texte = $comment_texte;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentUser(): ?Users
    {
        return $this->comment_user;
    }

    public function setCommentUser(?Users $comment_user): static
    {
        $this->comment_user = $comment_user;

        return $this;
    }

    public function getCommentIdBar(): ?Bars
    {
        return $this->comment_id_bar;
    }

    public function setCommentIdBar(?Bars $comment_id_bar): static
    {
        $this->comment_id_bar = $comment_id_bar;

        return $this;
    }
}