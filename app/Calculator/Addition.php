<?php

namespace App\Calculator;

use App\Calculator\Exception\NoOperandException;

class Addition
{
	protected $operands;

	public function setOperands(array $operands)
	{
		return $this->operands = $operands;
	}

	public function calculate()
	{
		if (empty($this->operands)) {
			throw new NoOperandException;
		}

		return array_sum($this->operands);
	}
}
