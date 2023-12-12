<?php

namespace Games\Calc;

function calc()
{
    $result = 0;
    $operators = ["+", "-", "*"];
    $number1 = mt_rand(0, 20);
    $number2 = mt_rand(0, 10);
    $randomoperation = $operators[mt_rand(0, 2)];
    $quest = "{$number1} {$randomoperation} {$number2}";
    switch ($randomoperation) {
        case "+":
            $result = $number1 + $number2;
            break;
        case "-":
            $result = $number1 - $number2;
            break;
        case "*":
            $result = $number1 * $number2;
            break;
        default:
            echo "Invalid operator";
    }
    $question = "{$quest}";
    $return = [$question, $result];
    return $return;
}
