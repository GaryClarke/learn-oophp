<?php // src/Inventory.php

namespace App;

class Inventory
{
    private array $products;
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function addProducts(): void
    {
        $this->products = $this->productRepository->fetchProducts();
    }


    public function getProducts(): array
    {
        return $this->products;
    }
}