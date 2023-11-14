<?php // ProductWriter.php

interface ProductWriter
{
    public function write(Product $product): string;
}