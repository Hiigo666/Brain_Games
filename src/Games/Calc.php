<?php

namespace Project\Games\Calc;

use function Project\Engine\examination;

use const Project\Engine\COUNT;

const DESCRIBE = "What is the result of the expression?";
const MIN_NUMBER = 0;
const MAX_NUMBER = 20;
const OPERATORS = ["+", "-", "*"];

function createTask()
{
    for ($i = 0; $i < COUNT; $i++) {
        $number1 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $number2 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $operator = OPERATORS[mt_rand(0, 2)];
        $result = calc($number1, $number2, $operator);
        $quest = "{$number1} {$operator} {$number2}";
        $task = "{$quest}";
        $createtask[] = [$task, $result];
    }
    return $createtask;
}


function calc($num1, $num2, $operator)
{
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
    examination(createTask(), DESCRIBE);
}
