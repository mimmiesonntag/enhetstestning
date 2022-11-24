<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AdditionTest extends TestCase
{

    public function testSumCart()
    {
        $cart = [100, 50, 30, 20];
        $expectedSum = 200;
        $acutal = $this->calculateSum($cart);
        $this->assertEquals($expectedSum, $acutal);
    }

    public function calculateSum($cart): float
    {
        return array_sum($cart);
    }
}
?>