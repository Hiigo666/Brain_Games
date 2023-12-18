<?php

namespace Project\Games\Calc;

function calc()
{
    $minNumber = 0;
    $maxNumber = 20;
    $result = 0;
    $operators = ["+", "-", "*"];
    $number1 = mt_rand($minNumber, $maxNumber);
    $number2 = mt_rand($minNumber, $maxNumber);
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
            exit;
    }
    $question = "{$quest}";
    $return = [$question, $result];
    return $return;
}
