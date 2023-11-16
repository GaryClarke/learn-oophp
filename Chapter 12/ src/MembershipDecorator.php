<?php // src/MembershipDecorator.php

namespace App;

class MembershipDecorator extends ReservationDecorator
{
    public function calculateCost(): float
    {
        return $this->reservation->calculateCost() * 0.5;
    }
}