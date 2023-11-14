<?php // src/Playlist.php

namespace App;

class Playlist
{
    private ?int $id;
    private ?string $name;
    private ?string $category;

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
}