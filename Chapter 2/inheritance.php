<?php // inheritance.php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 2000, 300);
$digitalBook = new DigitalBook('A Random Book', 'Jane Doe', 2000, 1048);

print $physicalBook->getPriceAsCurrency() . PHP_EOL;
print $digitalBook->getPriceAsCurrency() . PHP_EOL;