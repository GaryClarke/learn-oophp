<?php // src/SongDataWriter.php

namespace App;

class SongDataWriter
{
    public function write(Song $song): string
    {
        return $song->title . ' - ' . $song->artist . ' - ' . $song->getDurationInMinutes();
    }
}