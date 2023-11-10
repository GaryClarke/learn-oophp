<?php // encapsulation.php

require_once 'Playlist.php';
require_once 'Song.php';

$beatlesSongs = new Playlist();

$song = new Song('Yesterday', 100);
$fakeSong = 'This is not a song..it is a string';

$beatlesSongs->addSong($song);

var_dump($beatlesSongs->getSongs());