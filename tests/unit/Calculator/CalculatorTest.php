<?php

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
	/**	@test */
	public function can_get_single_operatio()
	{
		$fruits[] = ['oranges', 'bananas', 'apples'];

		$result = array_map(function ($fruits) {
			//var_dump($fruits);die;
			$moreFruits = ['grapes', 'melon'];
			return array_merge($fruits, $moreFruits);
		}, $fruits);

		$this->assertEquals(
			[ 0 => 
				[
					'oranges',
					'bananas',
					'apples',
					'grapes',
					'melon'
				]
			]
			, $result);
	}

}
