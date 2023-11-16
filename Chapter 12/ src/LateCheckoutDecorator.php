<?php // src/LateCheckoutDecorator.php

namespace App;

class LateCheckoutDecorator extends ReservationDecorator
{
    public function calculateCost(): float
    {
        return $this->reservation->calculateCost() * 1.2;
    }
}