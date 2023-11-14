<?php // src/Listener/OrderLogger.php

namespace App\Listener;

use App\Order;

class OrderLogger
{
    public function __invoke(Order $order)
    {
        print 'Order being logged...' . PHP_EOL;
    }
}