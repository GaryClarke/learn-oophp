<?php // Song.php

require_once 'Model.php';

class Song extends Model
{
    public static function getGroup()
    {
        return 'streamable';
    }
}