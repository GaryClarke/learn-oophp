<?php // Song.php

class Song
{
    public string $name;
    public int $numberOfPlays;

    /**
     * Song rating from 0 to 5
     * Half ratings allowed e.g. 3.5
     */
    private int|float $rating = 3;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    public function setRating(int|float $rating): void
    {
        $rating = max(0, $rating);

        $this->rating = min(5, $rating);
    }

    public function getRating(): int|float
    {
        return $this->rating;
    }
}