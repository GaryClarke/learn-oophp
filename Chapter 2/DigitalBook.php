<?php // DigitalBook.php

class DigitalBook
{
    public $author;
    public $title;
    public $price;
    public $fileSize;

    public function __construct(
        string $title,
        string $author,
        string $price,
        int $fileSize = 0,
    )
    {
        $this->author = $author;
        $this->title = $title;
        $this->price = $price;
        $this->fileSize = $fileSize;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getPriceAsCurrency(): string
    {
        return "$" . $this->price / 100;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function print(): string
    {
        return "{$this->title}, {$this->author}, file-size: {$this->fileSize}";
    }
}