<?php // traits.php

require_once 'Album.php';
require_once 'Connection.php';

$album = new Album();
print $album->getClassName() . PHP_EOL;

$connection = new Connection();
print $connection->getClassName() . PHP_EOL;