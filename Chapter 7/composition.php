<?php // composition.php

require_once 'vendor/autoload.php';

$song = new \App\Song('Yesterday', 'The Beatles', 180, new \App\JsonSongDataWriter());

$songAsText = $song->write();

dd($songAsText);

// 1. Create a JsonSongDataWriter which extends SongDataWriter
// 2. Override the parent write method to output json
// 3. Edit composition.php to test you work