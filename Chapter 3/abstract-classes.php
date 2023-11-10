<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';

$book = new PhysicalBook('Hamlet', 500);

print $book->getTitle() . PHP_EOL;