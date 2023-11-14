<?php // dependency-injection.php

require_once 'vendor/autoload.php';

$order = new \App\Order();
$orderController = new \App\OrderController();

$orderController->create($order, new \App\SmsNotifier());