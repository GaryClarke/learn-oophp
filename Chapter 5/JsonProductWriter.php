<?php // JsonProductWriter.php

require_once 'ProductWriter.php';

class JsonProductWriter implements ProductWriter
{
    public function write(Product $product): string
    {
        return json_encode(['name' => $product->getName()], JSON_THROW_ON_ERROR);
    }
}