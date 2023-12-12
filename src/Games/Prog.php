<?php

namespace Games\Prog;

function prog()
{
    $lenArr = mt_rand(5, 10);
    $step1 = mt_rand(1, 10);
    $step = 0;
    $result = [];
    for ($i = 1; $i <= $lenArr; $i++) {
        $step = $step1;
        $result[] = $step * $i;
    }
    $randSimpol = mt_rand(1, $lenArr) - 1;
    $trueResult = $result[$randSimpol];
    $result[$randSimpol] = "..";
    $bin = [implode(" ", $result), $randSimpol, $trueResult];
    // print_r($bin);
    $return = [implode(" ", $result), $trueResult];
    return $return;
}
