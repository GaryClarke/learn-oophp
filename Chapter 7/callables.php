<?php // callables.php

require_once 'vendor/autoload.php';

$listener = function (\App\Order $order) {
    echo 'Sending confirmation to ' . $order->getOrderer() . PHP_EOL;
};

$order = new \App\Order();

$orderPlacedEvent = new \App\Event\OrderPlaced();

$orderPlacedEvent->registerListener($listener);

$orderPlacedEvent->trigger($order);
