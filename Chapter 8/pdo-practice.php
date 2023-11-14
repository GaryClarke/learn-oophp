<?php // pdo-practice.php

use App\Connection;

require_once 'vendor/autoload.php';

$connection = Connection::getInstance();

$pdo = $connection->getPdo();

//$stmt = $pdo->query('SELECT * FROM playlist');

//while($row = $stmt->fetch()) {
//
//    print $row['name'] . PHP_EOL;
//}

$stmt = $pdo->prepare('SELECT * FROM playlist WHERE name LIKE ?');
$stmt->execute(['%Ballads%']);
$playlist = $stmt->fetch();


$stmt = $pdo->prepare('SELECT * FROM playlist WHERE name LIKE :foo AND category = :category');
$stmt->execute(['foo' => '%Power Ballads%', 'category' => strtolower('Soft Rock')]);
$playlist = $stmt->fetch();