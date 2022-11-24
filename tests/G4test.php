<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class g4 {
    public function calculateSum($cart)
    {
        foreach ($cart as $item) {
           return $item['amount'] * $item['price'];
        }
    }
}


final class G4Test extends TestCase {

    public function testg4() {
        $cart = [
            array(
            'name' => " Black plastic duck",
            'price' => 250,
            'amount' => 2
            )
            // kan vara fler än en produkt, eller ingen
            ];
        $g4 = new g4;
        $expected = "500";
        $actual = $g4->calculateSum($cart);
        $this->assertEquals($expected, $actual);  
    }
}
?>