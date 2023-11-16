<?php // src/ExecutiveSuiteDecorator.php

namespace App;

class ExecutiveSuiteDecorator extends ReservationDecorator
{
    public function calculateCost(): float
    {
        return $this->reservation->calculateCost() * 1.5;
    }
}