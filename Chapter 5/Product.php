<?php // Product.php

require_once 'Rateable.php';

class Product
{
    use Rateable;

    public function __construct(private string $manufacturer, private string $itemName)
    {
    }

    public function __get(string $name)
    {
        $methodName = "get$name";

        if (method_exists($this, $methodName)) {
            return  $this->$methodName();
        }
    }

    public function __set(string $propertyName, mixed $value): void
    {
        $methodName = "set" . ucwords($propertyName);

        if (!method_exists($this, $methodName)) {
            throw new BadMethodCallException("Method {$methodName} does not exist.");
        }

        $this->$methodName($value);
    }

    public function getName(): string
    {
        return $this->manufacturer . ' ' . $this->itemName;
    }
}