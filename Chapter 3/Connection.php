<?php // Connection.php

require_once 'Printable.php';

class Connection
{
    use Printable;

    private static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}