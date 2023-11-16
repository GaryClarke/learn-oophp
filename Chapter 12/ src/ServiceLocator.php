<?php // src/ServiceLocator.php

namespace App;

use App\OldStuff\JsonFileWriter;

class ServiceLocator
{
    private array $services = []; // array of service class names in string format
    private array $instantiated = []; // instantiated classes i.e. an array on instantiated objects

    public function addInstance(string $class, Service $service): void
    {
        $this->instantiated[$class] = $service;
    }

    public function addClass(string $class, array $constructorParams): void
    {
        $this->services[$class] = $constructorParams;
    }

    public function has(string $interface): bool
    {
        return isset($this->instantiated[$interface]) || isset($this->services[$interface]);
    }

    public function get(string $class): Service
    {
        if (isset($this->instantiated[$class])) {

            return $this->instantiated[$class];
        }

        $object = new $class(...$this->services[$class]);

        $this->instantiated[$class] = $object;

        return $object;
    }
}