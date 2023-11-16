<?php // composite.php

require_once 'vendor/autoload.php';

$playlist = new \App\Playlist("Gary's Playlist");

$songOne = new \App\Song('Song one');
$songTwo = new \App\Song('Song Two');
$videoOne = new \App\Video('Video one');
$videoTwo = new \App\Video('Video two');

$playlist->addItem($songOne);
$playlist->addItem($songTwo);
$playlist->addItem($videoOne);
$playlist->addItem($videoTwo);

$playlist->play();