<?php

use App\Katas\SecondSmallest;

class SecondSmallestTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function testBasic()
    {
        /** @var SecondSmallest $secondSmallest */
        $secondSmallest = new SecondSmallest();

        $this->assertEquals(2, $secondSmallest->NthSmallest([3, 1, 2], 2));
        $this->assertEquals(7, $secondSmallest->NthSmallest([15, 20, 7, 10, 4, 3], 3));
        $this->assertEquals(-1, $secondSmallest->NthSmallest([-5, -1, -6, -18], 4));
        $this->assertEquals(-2, $secondSmallest->NthSmallest([-102, -16, -1, -2, -367, -9], 5));
        $this->assertEquals(2, $secondSmallest->NthSmallest([2, 169, 13, -5, 0, -1], 4));
    }
}