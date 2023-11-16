<?php // observer.php

require_once 'vendor/autoload.php';

$stock = new \App\Stock();
$stock->attach(new \App\SignificantChangeObserver());
$stock->attach(new \App\StockPurchaseObserver());

$stock->getLatestPrice();
