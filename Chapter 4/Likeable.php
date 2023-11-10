<?php // Likeable.php

trait Likeable
{
    protected int $likes = 0;

    public function like(): void
    {
        ++ $this->likes;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }
}