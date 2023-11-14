<?php // Product.php

class Product
{
    public function __construct(private string $manufacturer, private string $itemName)
    {
    }

    public function getName(): string
    {
        return $this->manufacturer . ' ' . $this->itemName;
    }

    public function __get(string $propertyName)
    {
        $methodName = "get$propertyName";

        if (method_exists($this, $methodName)) {

            return $this->$methodName();
        }
    }
}