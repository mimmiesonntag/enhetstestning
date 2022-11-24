<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class Cart {

    public function addItem($cart)
    {
        $total = 0;
        foreach ($cart as $product) {
            $total += $product;
        }
        return $total;
    }
}

class Product {

    private $name;
    private $price;
    private $amount;

    function __construct($name, $price, $amount)

    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }


    public function calculateSum() 
    {
        return $this->price * $this->amount;
    }

}
final class G5Test extends TestCase {

    public function testg5() 
    {
        $cart = new Cart;
        $product1 = new Product("Black plastic duck", 250, 2);
        $product2 = new Product("T-shirt", 50, 3);
        $actual = $cart->addItem(array($product1->calculateSum(), $product2->calculateSum()));
        $expected = "650";

        $this->assertEquals($expected, $actual);  
    }
}

?>