<?php // decorator.php

require_once 'vendor/autoload.php';

$reservation = new \App\Reservation();
$reservation = new \App\ExecutiveSuiteDecorator($reservation); // 15
$reservation = new \App\MembershipDecorator($reservation); // 7.5
$reservation = new \App\LateCheckoutDecorator($reservation); // 9

print $reservation->calculateCost() . PHP_EOL;