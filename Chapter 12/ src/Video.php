<?php // src/Video.php

namespace App;

class Video implements Playable
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function play(): void
    {
        echo 'Playing video ' . $this->name . PHP_EOL;
    }
}