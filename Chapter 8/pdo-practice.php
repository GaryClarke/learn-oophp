<?php // pdo-practice.php

use App\Connection;

require_once 'vendor/autoload.php';

$connection = Connection::getInstance();
$connection2 = Connection::getInstance();
$connection3 = Connection::getInstance();

dd($connection === $connection2);