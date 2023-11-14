<?php // sleep.php

require_once 'vendor/autoload.php';

class Manager
{
    public function __construct(public string $name)
    {
    }
}

class Department
{
    public ?Manager $manager;

    public function __construct(public string $name)
    {
    }

    public function __sleep(): array
    {
        echo 'Sleeping...' . PHP_EOL;

        return [];
    }

    public function __wakeup(): void
    {
        echo 'Being unserialized...performing extra unserialization tasks...' . PHP_EOL;
    }
}

$manager = new Manager('Manager A');

$sales = new Department('sales');
$sales->manager = $manager;

$ser = serialize($sales);

dd(unserialize($ser));