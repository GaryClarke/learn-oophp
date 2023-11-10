<?php

require_once 'Song.php';

$song = new Song('Yesterday', 100);

// 1. Add functionality for SETTING and GETTING the song rating
// 2. Rating can not be set to less than 0 or more than 5
    // If < 0 attempted, set to 0
    // If > 5 attempted, set to 5

$song->setRating(9);

print $song->getRating() . PHP_EOL;