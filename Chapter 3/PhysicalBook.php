<?php // PhysicalBook.php

require_once 'Book.php';

class PhysicalBook extends Book
{
    public function __construct(string $title, int $weight = 0)
    {
        parent::__construct($title);

        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}