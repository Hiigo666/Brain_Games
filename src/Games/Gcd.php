<?php

namespace Project\Games\Gcd;

use function Project\Engine\examination;

use const Project\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = "Find the greatest common divisor of given numbers.";
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function generateData()
{
    $data = [];
    for ($i = 1; $i <= ROUND_COUNT; $i++) {
        $number1 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $number2 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $question = "{$number1} {$number2}";
        $result = gcd($number1, $number2);
        $data[] = [$question, $result];
    }
    return $data;
}

function run()
{
    examination(generateData(), GAME_DESCRIPTION);
}

function gcd(int $number1, int $number2)
{
    $maxNumber = max($number1, $number2);
    $result = 1;
    for ($j = 1; $j <= $maxNumber; $j++) {
        if ($number1 % $j === 0 && $number2 % $j === 0) {
            $result = $j;
        }
    }
    return $result;
}
