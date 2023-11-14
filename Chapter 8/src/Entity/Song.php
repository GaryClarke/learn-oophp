<?php // src/Entity/Song.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'songs')]
class Song
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id;

    #[ORM\Column(type: 'string')]
    private ?string $name;

    #[ORM\Column(type: 'string', name: 'file_location')]
    private ?string $fileLocation;

    #[ORM\ManyToOne(targetEntity: 'Artist', inversedBy: 'songs')]
    private ?Artist $artist;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getFileLocation(): ?string
    {
        return $this->fileLocation;
    }
}