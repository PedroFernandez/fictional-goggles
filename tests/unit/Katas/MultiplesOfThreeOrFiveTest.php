<?php

use App\Katas\MultiplesOfThreeOrFive;

class SecondSmallestTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function testBasic()
    {
        /** @var MultiplesOfThreeOrFive $secondSmallest */
        $multiples = new MultiplesOfThreeOrFive();

        $this->assertEquals(0, $multiples->multiples( 0));
    }
}