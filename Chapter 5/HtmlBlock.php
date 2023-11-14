<?php // HtmlBlock.php

abstract class HtmlBlock
{
    public function __construct(private string $content)
    {
    }

    public function __destruct()
    {
        echo get_called_class() . ' : __destruct called..' . PHP_EOL;
    }

    abstract public static function getOpeningTag(): string;

    abstract public static function getClosingTag(): string;

    public function __toString(): string
    {
        return static::getOpeningTag() . $this->content . static::getClosingTag();
    }
}
