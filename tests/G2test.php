<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class G2Test extends TestCase
{
    public function testCapitalize() 
    {
        $expected = "Hello world";
        $actual = $this->capitalize();
        $this->assertEquals($expected, $actual);
    }
    public function capitalize() 
    {
        return ucfirst("hello world");
    }
}
?>