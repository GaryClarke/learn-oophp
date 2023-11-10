<?php // Connection.php

class Connection
{
    public static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }
}