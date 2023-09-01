<?php

namespace App\Entity;

use App\Trait\CreatedAtTrait;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use App\Repository\BarsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BarsRepository::class)]
#[HasLifecycleCallbacks]
class Bars
{

    use CreatedAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 5)]
    private ?string $code_postal = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $info = null;

    #[ORM\Column]
    private ?float $note_moyenne = null;



    #[ORM\ManyToOne(inversedBy: 'createur_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user_createur = null;

    #[ORM\OneToMany(mappedBy: 'comment_id_bar', targetEntity: Commentaires::class)]
    private Collection $comment_bar;

    public function __construct()
    {
        $this->comment_bar = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): static
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): static
    {
        $this->info = $info;

        return $this;
    }

    public function getNoteMoyenne(): ?float
    {
        return $this->note_moyenne;
    }

    public function setNoteMoyenne(float $note_moyenne): static
    {
        $this->note_moyenne = $note_moyenne;

        return $this;
    }


    public function getUserCreateur(): ?Users
    {
        return $this->user_createur;
    }

    public function setUserCreateur(?Users $user_createur): static
    {
        $this->user_createur = $user_createur;

        return $this;
    }

    /**
     * @return Collection<int, Commentaires>
     */
    public function getCommentBar(): Collection
    {
        return $this->comment_bar;
    }

    public function addCommentBar(Commentaires $commentBar): static
    {
        if (!$this->comment_bar->contains($commentBar)) {
            $this->comment_bar->add($commentBar);
            $commentBar->setCommentIdBar($this);
        }

        return $this;
    }

    public function removeCommentBar(Commentaires $commentBar): static
    {
        if ($this->comment_bar->removeElement($commentBar)) {
            // set the owning side to null (unless already changed)
            if ($commentBar->getCommentIdBar() === $this) {
                $commentBar->setCommentIdBar(null);
            }
        }

        return $this;
    }
}