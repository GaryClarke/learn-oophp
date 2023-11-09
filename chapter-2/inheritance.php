<?php // inheritance.php

require_once 'PhysicalBook.php';

$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 2000);
$physicalBook->weight = 300;

print $physicalBook->print() . PHP_EOL;