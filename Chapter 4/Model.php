<?php // Model.php

abstract class Model
{
    private $group;

    public function __construct()
    {
        $this->group = static::getGroup();
    }

    public static function create(): Model
    {
        return new static();
    }

    public static function getGroup()
    {
        return 'default';
    }
}