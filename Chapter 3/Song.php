<?php // Song.php

class Song
{
    public string $name;
    public int $numberOfPlays;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }
}