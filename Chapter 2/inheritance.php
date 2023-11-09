<?php // inheritance.php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';


$book = new Book('Random Book', 'Jane Doe', 2000);
print $book->getWeight() . PHP_EOL;

//$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 2000, 300);
//print $physicalBook->print() . PHP_EOL;