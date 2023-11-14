<?php // single-responsibility.php

require_once 'vendor/autoload.php';

$song = new \App\Song('Yesterday', 'The Beatles', 180);

$songAsText = $song->write(true);

dd($songAsText);