<?php

/* suite tuto mais non utilisé*/
namespace App\Trait;


use Doctrine\ORM\Mapping as ORM;

trait SlugTrait
{

    #[ORM\Column(type: 'string', length: 32)]
    private $slug;

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

}