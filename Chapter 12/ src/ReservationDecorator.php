<?php // src/ReservationDecorator.php

namespace App;

abstract class ReservationDecorator implements ReservationInterface
{
    protected ReservationInterface $reservation;

    public function __construct(ReservationInterface $reservation)
    {
        $this->reservation = $reservation;
    }
}