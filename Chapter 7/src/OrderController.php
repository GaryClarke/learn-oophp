<?php // src/OrderController.php

namespace App;

class OrderController
{

    public function create(Order $order, NotifierInterface $notifier)
    {
        // 1. Save an order to the database
        echo 'Saving order to the database...' . PHP_EOL;

        $customer = $order->getOrderer();

        // 2. Send an email notification to the customer
        $notifier->send($customer);

    }
}