<?php // serializing-objects.php

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
}

$manager = new Manager('Manager A');

$sales = new Department('sales');

$sales->manager = $manager;

$ser = serialize($sales);

dd($ser);
