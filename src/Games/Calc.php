<?php

namespace Games\Calc;

use function cli\line;
use function cli\prompt;


function calc()
{
    $operators = ["+","-","*"];
    $number1 = mt_rand(0, 20);
    $number2 = mt_rand(0, 10);
    $randomoperation = $operators[mt_rand(0,2)];
    $quest = $number1.$randomoperation.$number2;
switch($randomoperation){
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
    $question = "Пример:{$quest}";
    $return = [$question, $result];
    return $return;

}
