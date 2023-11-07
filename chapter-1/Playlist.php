<?php // Playlist.php

class Playlist
{
    public $songs = [];

    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }
}
