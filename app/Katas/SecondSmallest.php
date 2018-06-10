<?php

namespace App\Katas;

class SecondSmallest
{
    public function NthSmallest($arr, $pos)
    {
        sort($arr);
        return $arr[$pos-1];
    }
}