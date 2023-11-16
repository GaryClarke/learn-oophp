<?php // src/Song.php

namespace App;

class Song implements Playable
{

    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function play(): void
    {
        echo 'Playing song ' . $this->name . PHP_EOL;
    }
}