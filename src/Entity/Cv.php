<?php

namespace App\Entity;

use App\Repository\CvRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CvRepository::class)]
class Cv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dil = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDil(): ?string
    {
        return $this->dil;
    }

    public function setDil(string $dil): static
    {
        $this->dil = $dil;

        return $this;
    }
}
