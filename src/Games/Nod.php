<?php

namespace Games\Nod;

function nod()
{
    $number1 = mt_rand(1, 100);
    $number2 = mt_rand(1, 100);
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
