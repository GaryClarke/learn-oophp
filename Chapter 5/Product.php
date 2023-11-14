<?php // Product.php

require_once 'Rateable.php';

class Product
{
    use Rateable;

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

    public function __set(string $propertyName, $value): void
    {
        $methodName = "set" . ucwords($propertyName);

        if (!method_exists($this, $methodName)) {
            throw new BadMethodCallException('Method ' . $methodName . ' does not exist');
        }

        $this->$methodName($value);
    }

    public function __unset(string $propertyName): void
    {
        $this->__set($propertyName, null);
    }


}
