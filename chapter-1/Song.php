<?php // Song.php

class Song
{
    public $name;
    public $numberOfPlays;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }
}
