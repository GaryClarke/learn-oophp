<?php // final-keyword.php

final class PercentageCalculator
{
    public function calculatePercentage($part, $whole): float
    {
        return $part / $whole * 100;
    }
}

class FinanceCalculator extends PercentageCalculator
{

    public function calculatePercentage($a, $b): float
    {
        return $a / $b;
    }
}

$calcultor = new FinanceCalculator();
print $calcultor->calculatePercentage(5, 20) . PHP_EOL;


//$calcultor = new Calculator();
//print $calcultor->calculatePercentage(5, 20) . PHP_EOL;