<?php // inheritance.php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 2000, 300);

print $physicalBook->getTitle() . PHP_EOL;
print $physicalBook->print() . PHP_EOL;