<?php // traits-and-interfaces.php

require_once 'Book.php';
require_once 'Song.php';

$book = new Book();
print $book->getHexId() . PHP_EOL;

$song = new Song();
print $song->getHexId() . PHP_EOL;