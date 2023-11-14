<?php // autoloading.php

// autoload from same folder
use Utility\Chart;

require_once 'autoload.php';

$chart = new Chart();
print $chart->draw() . PHP_EOL;

$connection = new \Postgres\Connection(); 
print $connection->connect() . PHP_EOL;

// autoload from namespaced folder

// default