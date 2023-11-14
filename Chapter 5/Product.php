<?php // Product.php

require_once 'Rateable.php';

class Product
{
    use Rateable;

    public function __construct(
        private string $manufacturer,
        private string $itemName,
        private ProductWriter $productWriter
    )
    {
    }

    public function __call(string $methodName, array $arguments)
    {
        if (method_exists($this->productWriter, $methodName)) {
            return $this->productWriter->$methodName($this);
        }

        return $this->getName();

    }

    public function getName(): string
    {
        return $this->manufacturer . ' ' . $this->itemName;
    }


}