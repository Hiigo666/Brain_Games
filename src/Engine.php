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
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
    return $name;
}

function intro(?int $game)
{
    switch ($game) {
        case 1:
            line("What is the result of the expression?");
            break;
        case 2:
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 3:
            line("Find the greatest common divisor of given numbers.");
            break;
        case 4:
            line("What number is missing in the progression?");
            break;
        case 5:
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
            break;
    }
}
function End(?string $user)
{
    line("Congratulations, {$user}!");
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
        line("Question: {$task}");
        $answer = prompt('Your answer');
        if ($answer == $truResult) {
            line('Correct!');
            $count += 1;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$truResult'");
            line("Let's try again, {$name}!");
            exit;
        }
    }
}
