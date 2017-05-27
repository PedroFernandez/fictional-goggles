<?php

namespace App\Calculator;

use App\Calculator\OperationAbstract;
use App\Calculator\Exception\NoOperandException;

class Division extends OperationAbstract implements OperationInterface
{
	public function calculate()
	{
		if (empty($this->operands)) {
			throw new NoOperandException;
		}

		return array_reduce($this->operands, function ($a, $b) {
			if ($a !== null && $b !== null) {
				return $a / $b;
			}
			return $b;	
		}, null);
	}
}
