<?php

namespace App\Katas;

class MultiplesOfThreeOrFive {

    public function multiples($number)
    {
        $testNumber = range(0, $number - 1);
        rsort($testNumber);
//print_r($testNumber);die;

        $multipleOf5 = [];
        $multipleOf3 = [];
        foreach ($testNumber as $key => $value) {
            if ($value % 5 == 0) {
                $multipleOf5[] += $value;
            } elseif ($value % 3 == 0) {
                $multipleOf3[] += $value;
            }
        }
        $total = array_merge($multipleOf3, $multipleOf5);

        return array_sum($total);
    }
}
