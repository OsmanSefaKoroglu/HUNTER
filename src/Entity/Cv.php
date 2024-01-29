<?php

namespace App\Entity;

use App\Repository\CvRepository;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;


#[ORM\Entity(repositoryClass: CvRepository::class)]
class Cv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    private ?string $ad = null;
    #[ORM\Column(length: 255)]
    private ?string $soyad = null;
    #[ORM\Column(length: 255)]
    private ?string $gmail = null;
    #[ORM\Column(length: 255)]
    private ?int $telno = null;
    #[ORM\Column(length: 255)]
    private ?string $dil = null;
    #[ORM\Column(length: 255)]
    private ?int$tecrube = null;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;
    #[ORM\Column(length: 255)]
    private ?string $imagePath = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getAd(): ?string
    {
        return $this->ad;
    }

    public function setAd(string $ad): static
    {
        $this->ad = $ad;


        return $this;
    }

    public function getSoyAd(): ?string
    {
        return $this->soyad;
    }

    public function setSoyAd(string $soyad): static
    {
        $this->soyad = $soyad;

        return $this;
    }
    public function getGmail(): ?string
    {
        return $this->gmail;
    }

    public function setGmail(string $gmail): static
    {
        $this->gmail = $gmail;

        return $this;
    }
    public function getTelno(): ?int
    {
        return $this->telno;
    }

    public function setTelno(string $telno): static
    {
        $this->telno = $telno;

        return $this;
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
    public function getTecrube(): ?int
    {
        return $this->tecrube;
    }

    public function setTecrube(int $tecrube): static
    {
        $this->tecrube = $tecrube;


        return $this;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setDescirption(string $description): static
    {
        $this->description = $description;


        return $this;
    }
    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }
}
