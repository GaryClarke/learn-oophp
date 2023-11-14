<?php // src/Entity/Playlist.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'playlists')]
class Playlist
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id;

    #[ORM\Column(type: 'string')]
    private ?string $name;

    #[ORM\Column(type: 'string')]
    private ?string $category;

    #[ORM\ManyToMany(targetEntity: 'Song', inversedBy: 'playlists')]
    #[ORM\JoinTable(name: 'playlist_song')]
    private $songs;

    public function __construct()
    {
        $this->songs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function getSongs()
    {
        return $this->songs;
    }
}