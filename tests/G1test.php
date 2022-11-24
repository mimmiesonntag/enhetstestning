<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class g1 {

public function getDaysToDelivery($days) {

 if ($days > 1) {
    return $days . " days left";
    } else if ($days == 1) {
        return $days . "days left";
    } else {
        return $days . "arrives today";
    };
 }
}

final class G1Test extends TestCase {
    public function testG1() {
        $g1 = new g1;
        $expected = "6 days left";
        $actual = $g1->getDaysToDelivery(6);
        $this->assertEquals($expected, $actual);  
    }
}
?>