<?php

namespace Games\Progression;

function progression()
{
    $lenArr = mt_rand(5, 10); // Генерируем длину массива
    $step1 = mt_rand(1, 10); // Генерируем шаг прогрессии
    $step = 0;
    $result = [];
    for ($i = 1; $i <= $lenArr; $i++) {
        $step = $step1;
        $result[] = $step * $i;
    }
    $randSimpol = mt_rand(1, $lenArr) - 1;
    $trueResult = $result[$randSimpol];
    $result[$randSimpol] = "..";
    $return = [implode(" ", $result), $trueResult];
    return $return;
}
