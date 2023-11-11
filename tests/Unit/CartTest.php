<?php

namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;


class CartTest extends TestCase
{
    public function testConstructor(): void
    {
        $cart = new \App\Models\Cart();

        $this->assertEquals([], $cart->htItem);
        $this->assertEquals(0, $cart->iTotalItems);
        $this->assertEquals(0, $cart->dTotalPrice);
    }

    public static $cart;

    public static function InicialiceCart(): void
    {
        self::$cart = new \App\Models\Cart();
        
        $firstProduct = new \App\Models\Product();
        $firstProduct = \App\Models\Product::first();
        self::$cart->add($firstProduct);

        $secondProduct = new \App\Models\Product();
        $secondProduct = \App\Models\Product::skip(1)->first();
        self::$cart->add($secondProduct);

        $thirdProduct = new \App\Models\Product();
        $thirdProduct = \App\Models\Product::skip(2)->first();
        self::$cart->add($thirdProduct);

        $lastProduct = new \App\Models\Product();
        $lastProduct = \App\Models\Product::latest()->first();
        self::$cart->add($lastProduct);
    }

    public function testAdd(): void
    {
        self::InicialiceCart();
        $product = new \App\Models\Product();
        $product = \App\Models\Product::first();
        $initialProductCount = self::$cart->iTotalItems;
        self::$cart->add($product);
        $this->assertEquals($initialProductCount + 1, self::$cart->iTotalItems);
    }

    public function testRemove(): void
    {
        self::InicialiceCart();
        $product = new \App\Models\Product();
        $product = \App\Models\Product::first();
        $initialProductCount = self::$cart->iTotalItems;
        self::$cart->remove($product);
        $this->assertEquals($initialProductCount -1, self::$cart->iTotalItems);
    }

    public function testRemoveAll(): void
    {
        self::InicialiceCart();
        $product = new \App\Models\Product();
        $product = \App\Models\Product::first();
        self::$cart->add($product);
        $initialProductCount = self::$cart->iTotalItems;
        self::$cart->removeAll($product);
        $this->assertEquals($initialProductCount -2, self::$cart->iTotalItems);}
}