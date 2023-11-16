<?php // src/ReservationInterface.php

namespace App;

interface ReservationInterface
{
    public function calculateCost(): float;
}