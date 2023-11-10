<?php // abstract-trait-methods.php

require_once 'Book.php';

$book = new Book();

$book->setId(1234);
$book->setName('The Pragmatic Programmer');
$book->printIdentity();