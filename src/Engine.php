<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;
use function Project\Engine\examination;
use function Project\Engine\greeting;
use function Games\Calc\calc;
use function Games\Even\even;

function greeting()
{
    line('Добро пожаловать в интеллектуальные игры!');
    $name = prompt('Можно узнать ваше имя?');
    line("Привет %s!", $name);
    return $name;
}


function End($user)
{
    line("Поздравляю {$user}! Игра пройдена!");
}


function examination($name, $game)
{
    $count = 0;
    while ($count < 3) {
        if ($game == 1) {
        [$task, $truResult] = calc();
    } elseif ($game == 2) {
        [$task, $truResult] = even();
    }
    line("Вопрос: {$task}");
    $answer = prompt('Ваш ответ?');
    if ($answer == $truResult) {
        line("Ваш ответ: {$answer}");
        line('Правильно!');
        $count += 1;
    } else {
        line("Ваш ответ: {$answer}");
        line("Ответ '$answer' не верный, правильный ответ будет '$truResult'");
        line("Попробуйте еще раз {$name}!");
        exit;
    }
    }
}
