<?php

namespace Project\Games\Progression;

function progression()
{
    $minLen = 5;
    $maxLen = 10;
    $minProgression = 3;
    $maxProgression = 15;
    $lenArr = mt_rand($minLen, $maxLen); 
    $stepProgression = mt_rand($minProgression, $maxProgression); 
    $step = 0;
    $result = [];
    for ($i = 1; $i <= $lenArr; $i++) {
        $step = $stepProgression;
        $result[] = $step * $i;
    }
    $startLocation = 0;
    $finishLocation = $lenArr - 1;
    $randSimpol = mt_rand($startLocation, $finishLocation);
    $trueResult = $result[$randSimpol];
    $result[$randSimpol] = "..";
    $return = [implode(" ", $result), $trueResult];
    return $return;
}
