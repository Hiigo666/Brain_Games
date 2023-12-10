<?php

namespace Php\Project\Test;

use function Cli\line;
use function Cli\prompt;


$name = "";

function greeting()
{
    line('Добро пожаловать в интеллектуальные игры!');
    $name = prompt('Можно узнать ваше имя?');
    line("Привет %s!", $name);
    return $name;
}


function question()
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
    $return = [$question, $quest, $result];
    return $return;

}

function End($user)
{
    line("Поздравляю {$user}! Игра пройдена!");
}