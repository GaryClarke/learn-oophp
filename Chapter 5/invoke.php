<?php // invoke.php

class Multiplication
{
    public function __invoke(float|int $multiplier, float|int $multiplicand): float|int
    {
        return $multiplier * $multiplicand;
    }
}


$multiplication = new Multiplication;

$product = $multiplication(4, 5);

print $product . PHP_EOL;