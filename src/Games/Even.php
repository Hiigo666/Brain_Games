<?php

namespace Project\Games\Even;

function even()
{
    $minNumber = 1;
    $maxNumber = 100;
    $quest = mt_rand($minNumber, $maxNumber);
    if ($quest % 2 === 0) {
        $result = "yes";
    } else {
        $result = "no";
    }
    $return = [$quest, $result];
    return $return;
}
