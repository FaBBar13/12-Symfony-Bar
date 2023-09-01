<?php


namespace App\Trait;

use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

use Doctrine\ORM\Mapping as ORM;

#[HasLifecycleCallbacks]
trait CreatedAtTrait
{


    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[PrePersist]
    public function onPrePersist()
    {
        $this->created_at ??= new \DateTimeImmutable();
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at ??= new \DateTimeImmutable();
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }


}