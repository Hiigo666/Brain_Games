<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;
use function Games\Calc\calc;
use function Games\Even\even;
use function Games\Nod\nod;
use function Games\Prog\prog;
use function Games\Prime\prime;
function greeting()
{
    line('Добро пожаловать в интеллектуальные игры!');
    $name = prompt('Можно узнать ваше имя?');
    line("Привет %s!", $name);
    return $name;
}

function intro($game)
{
    switch ($game) {
        case 2:
            line("Ответьте «yes», если число четное, в противном случае ответьте «no»");
            break;
    }
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
    } elseif ($game == 3) {
        [$task, $truResult] = nod();
    } elseif ($game == 4) {
        [$task, $truResult] = prog();
    } elseif ($game == 5) {
        [$task, $truResult] = prime();
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
