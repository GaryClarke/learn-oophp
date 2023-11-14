<?php // Rateable.php

trait Rateable
{
    private float $rating;

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $rating): void
    {
        $rating = min(5, max(0, $rating));

        $this->rating = $rating;
    }
}