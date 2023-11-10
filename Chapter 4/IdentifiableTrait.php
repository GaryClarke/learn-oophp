<?php // IdentifiableTrait.php

trait IdentifiableTrait
{
    public function getHexId(): string
    {
        return bin2hex(random_bytes(5));
    }

    abstract public function getId(): int;

    abstract public function getName(): string;

    public function printIdentity(): void
    {
        print $this->getId() . ' : ' . $this->getName() . PHP_EOL;
    }
}