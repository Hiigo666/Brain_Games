<?php

namespace Project\Games\Prime;

function prime()
{
    $minNumber = 1;
    $maxNumber = 20;
    $trueAnswer = "yes";
    $symbol = mt_rand($minNumber, $maxNumber);
    if ($symbol <= 1) {
        $trueAnswer = "no";
    }
    for ($i = 2; $i <= sqrt($symbol); $i++) {
        if ($symbol % $i == 0) {
            $trueAnswer = "no";
        }
    }
    $return = [$symbol, $trueAnswer];
    return $return;
}
