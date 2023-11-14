<?php // clone.php

class Manager
{
    public function __construct(public string $name)
    {
    }
}

$managerOne = new Manager('Manager One');

$managerTwo = clone $managerOne;

$managerTwo->name = 'Manager Two';

class Department
{
    public function __construct(public string $name, public Manager $manager)
    {
    }

    public function __clone(): void
    {
        $this->manager = clone $this->manager;
    }
}


$departmentOne = new Department('sales', $managerOne);

$departmentTwo = clone $departmentOne;

$departmentTwo->name = 'product';
$departmentTwo->manager->name = 'Manager Two';

print_r($departmentOne);
print_r($departmentTwo);
