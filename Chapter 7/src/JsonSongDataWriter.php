<?php // src/JsonSongDataWriter.php

namespace App;

class JsonSongDataWriter extends SongDataWriter
{
    public function write(Song $song): string
    {
        return json_encode($song);
    }
}