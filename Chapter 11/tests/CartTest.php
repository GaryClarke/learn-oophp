<?php // tests/CartTest.php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected function setUp(): void
    {
        Cart::$tax = 1.2;
    }

    /** @test */
    public function the_cart_tax_value_can_be_changed_statically(): void
    {
        Cart::$tax = 1.5;
        $cart = new Cart();
        $cart->price = 10;

        $this->assertEquals(15, $cart->getNetPrice());
    }

    public function testCorrectNetPriceIsReturned(): void
    {
        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }
}