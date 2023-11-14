<?php // anonymous-classes.php

require_once 'vendor/autoload.php';

$song = new \App\Song('Help!', 'The beatles', 180);

$songInfo = $song->write(new class implements \App\SongWriterInterface {

    public function __construct(private string $prefix = 'DISK 1')
    {
    }

    public function write(\App\Song $song): string
    {
        return $this->prefix . ': ' . $song->title . ' by '. $song->artist . ' ' . $song->getDurationInMinutes();
    }
});

print $songInfo . PHP_EOL;