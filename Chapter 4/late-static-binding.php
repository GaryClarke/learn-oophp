<?php

/**
 * 1. Extend the model class in Book / Song
 * 2. Call the ::create method off a book / song
 * 3. Var dump the produced model object
 */

require_once 'Song.php';
require_once 'Book.php';

$song = Song::create();
$book = Book::create();

var_dump($book);
var_dump($song);