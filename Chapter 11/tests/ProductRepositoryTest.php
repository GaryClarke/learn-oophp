<?php // tests/ProductRepositoryTest.php

use PHPUnit\Framework\TestCase;

class ProductRepositoryTest extends TestCase
{

    public function testProductsAreReturned(): void
    {
        $productRepoMock = $this->createMock(\App\ProductRepository::class);

        $mockProductsArray = [
            ['id' => 1, 'name' => 'Acme Radio Knobs'],
            ['id' => 2, 'name' => 'Apple iPhone'],
        ];

        $productRepoMock->method('fetchProducts')
            ->willReturn($mockProductsArray);

        $this->assertCount(2, $productRepoMock->fetchProducts());
    }
}
