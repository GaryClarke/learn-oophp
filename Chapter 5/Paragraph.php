<?php // Paragraph.php

require_once 'HtmlBlock.php';

class Paragraph extends HtmlBlock
{
    public static function getOpeningTag(): string
    {
        return '<p>';
    }

    public static function getClosingTag(): string
    {
        return '</p>';
    }
}