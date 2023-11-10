<?php // traits-and-precedence.php

require_once 'Song.php';

$song = new Song();

print $song->getId() . PHP_EOL;

print $song->getHexId() . PHP_EOL;
print $song->getOriginalHexId() . PHP_EOL;