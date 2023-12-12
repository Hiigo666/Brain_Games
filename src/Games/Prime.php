<?php

namespace Games\Prime;

function prime()
{
    $trueAnswer = "yes";
    $symbol = mt_rand(1, 20);
    for($i = 2; $i <= sqrt($symbol); $i++) {
        if ($symbol % $i == 0) {
            $trueAnswer = "no";
        }
    }
    $return = [$symbol, $trueAnswer];
    return $return;
}