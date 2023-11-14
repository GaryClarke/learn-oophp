<?php // src/Entity/Artist.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'artists')]
class Artist
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id;

    #[ORM\Column(type: 'string')]
    private ?string $name;

    #[ORM\OneToMany(targetEntity: 'Song', mappedBy: 'artist')]
    private $songs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}