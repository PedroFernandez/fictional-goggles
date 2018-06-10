<?php

use App\Katas\NoFives;

class DonGiveMeFiveTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function no_fives_are_returned()
    {
        /** @var NoFives $noFives */
        $noFives = new NoFives();


        $this->assertEquals(8, $noFives->dont_give_me_five(1, 9));
        $this->assertEquals(12, $noFives->dont_give_me_five(4, 17));
        $this->assertEquals(811, $noFives->dont_give_me_five(500, 1700));
    }
}