<?php

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
	
	/** @test */
	public function operands_can_be_summed()
	{
		$addition = new App\Calculator\Addition();
		$operands = $addition->setOperands([5, 10]);

		$this->assertEquals(15, $addition->calculate());
	}

	/** @test */
	public function no_operands_thrown_an_exception()
	{
		$this->expectException(App\Calculator\Exception\NoOperandException::class);

		$addition = new App\Calculator\Addition();
		$this->assertEquals(15, $addition->calculate());	
	}

	/** @test */
	public function divide_given_operands()
	{
		$division = new App\Calculator\Division();
		$operands = $division->setOperands([100, 2]);

		$this->assertEquals(50, $division->calculate());
	}
}
