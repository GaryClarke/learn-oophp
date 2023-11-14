<?php // callables.php

require_once 'vendor/autoload.php';

//$listener = function (\App\Order $order) {
//    echo 'Sending confirmation to ' . $order->getOrderer() . PHP_EOL;
//};
//
$listener = fn ($order) => print 'Sending confirmation to ' . $order->getOrderer() . PHP_EOL;

$order = new \App\Order();

$orderPlacedEvent = new \App\Event\OrderPlaced();


$orderPlacedEvent->registerListener([new \App\Listener\OrderNotificationMailer(), 'send']);
$orderPlacedEvent->registerListener($listener);
$orderPlacedEvent->registerListener(new \App\Listener\OrderLogger());

// 1. Create a new class in Listener (OrderLogger)
// 2. The class needs to be callable
// 3. Print 'Order being logged'...or something similar




$orderPlacedEvent->trigger($order);
