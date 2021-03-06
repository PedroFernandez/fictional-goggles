<?php

namespace App\Calculator;

use App\Calculator\OperationAbstract;
use App\Calculator\Exception\NoOperandException;

class Addition extends OperationAbstract implements OperationInterface
{
	public function calculate()
	{
		if (empty($this->operands)) {
			throw new NoOperandException;
		}

		return array_sum($this->operands);
	}
}
