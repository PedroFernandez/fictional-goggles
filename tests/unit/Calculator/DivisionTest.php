<?php

class DivisionTest extends \PHPUnit_Framework_TestCase
{
	/** @test */
	public function divide_given_operands()
	{
		$division = new App\Calculator\Division();
		$operands = $division->setOperands([100, 2]);

		$this->assertEquals(50, $division->calculate());
	}
}
