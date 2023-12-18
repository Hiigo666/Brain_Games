<?php

namespace Project\Games\Gcd;

function gcd()
{
    $minNumber = 1;
    $maxNumber = 100;
    $number1 = mt_rand($minNumber, $maxNumber);
    $number2 = mt_rand($minNumber, $maxNumber);
    $question = "{$number1} {$number2}";
    $maxNumber = max($number1, $number2);
    $nod = 1;
    for ($i = 1; $i <= $maxNumber; $i++) {
        if ($number1 % $i === 0 && $number2 % $i === 0) {
            $nod = $i;
        }
    }
    $return = [$question, $nod];
    return $return;
}
