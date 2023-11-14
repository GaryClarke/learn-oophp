<?php // tests/Inventory.php

use App\Inventory;
use PHPUnit\Framework\TestCase;

class InventoryTest extends TestCase
{

    public function testAddProducts(): void
    {
        $mockProductsRepo = $this->createMock(\App\ProductRepository::class);

        $inventory = new Inventory($mockProductsRepo);

        $mockProductsRepo
            ->expects($this->once())
            ->method('fetchProducts')
            ->willReturn([
                ['id' => 1, 'name' => 'Acme Radio Knobs'],
                ['id' => 2, 'name' => 'Apple iPhone'],
            ]);

        $inventory->addProducts();

        $this->assertCount(2, $inventory->getProducts());
    }
}