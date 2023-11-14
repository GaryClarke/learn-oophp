<?php // City.php

namespace App;

class City
{
    public function __construct(
        private ?string $name = null,
        private ?string $country = null,
        private ?int $population = null
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPopulation(): int
    {
        return $this->population;
    }

    public function setPopulation(int $population): void
    {
        $this->population = $population;
    }
}