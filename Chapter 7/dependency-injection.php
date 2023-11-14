<?php // dependency-injection.php

require_once 'vendor/autoload.php';

$order = new \App\Order();
$orderController = new \App\OrderController();

$notifier = new \App\EmailNotifier();

$orderController->create($order, $notifier);