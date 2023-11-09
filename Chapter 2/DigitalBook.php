<?php // DigitalBook.php

require_once 'Book.php';

class DigitalBook extends Book
{
    public $fileSize;

    public function __construct(
        string $title,
        string $author,
        string $price,
        int $fileSize = 0,
    )
    {

        parent::__construct($title, $author, $price);

        $this->fileSize = $fileSize;
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