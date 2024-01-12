<?php

namespace Project\Games\Calc;

use function Project\Engine\examination;

use const Project\Engine\ROUNDS;

const GAME_DESCRIPTION = "What is the result of the expression?";
const MIN_NUMBER = 0;
const MAX_NUMBER = 20;
const OPERATORS = ["+", "-", "*"];

function generateData()
{
    $data = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $number1 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $number2 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $operator = OPERATORS[mt_rand(0, 2)];
        $result = calc($number1, $number2, $operator);
        $questioin = "{$number1} {$operator} {$number2}";
        $data[] = [$questioin, $result];
    }
    return $data;
}


function calc(int $num1, int $num2, string $operator)
{
    $result = 0;
    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        default:
            echo "Invalid operator";
            break;
    }
    return $result;
}

function run()
{
    examination(generateData(), GAME_DESCRIPTION);
}
