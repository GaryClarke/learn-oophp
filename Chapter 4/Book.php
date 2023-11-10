<?php // Book.php

require_once 'Identifiable.php';
require_once 'IdentifiableTrait.php';

class Book implements Identifiable
{
    use IdentifiableTrait;

    private int $id;

    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
