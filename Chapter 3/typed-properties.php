<?php // typed-properties.php

require_once 'Song.php';

$songTitles = ['Yesterday', 'Help!', 'Something'];

$song = new Song($songTitles[0], 100);

//$song->name = $songTitles;
//
//var_dump($song->name);

$song->numberOfPlays = [300, 200];

var_dump($song->numberOfPlays);