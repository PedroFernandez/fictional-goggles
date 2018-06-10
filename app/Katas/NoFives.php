<?php

namespace App\Katas;

class NoFives
{
    public function dont_give_me_five($start, $end)
    {
        $numbers = range($start, $end);

        $allNumbers = [];
        foreach ($numbers as $key => $value) {
            $string = (string)$value;
            if (!preg_match('/5/', $string)) {
                $allNumbers[] = $string;
            }
        }

        return count($allNumbers);
    }
}