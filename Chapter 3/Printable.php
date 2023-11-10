<?php // Printable.php

trait Printable
{
    public function getClassName(): string
    {
        return strtolower(get_class($this));
    }
}