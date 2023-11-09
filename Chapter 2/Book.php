<?php // Book.php

class Book
{
    public $title;
    public $author;
    public $price;
    public $weight;
    public $fileSize;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $weight = 0,
        int $fileSize = 0,
    )
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->weight = $weight;
        $this->fileSize = $fileSize;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }
}