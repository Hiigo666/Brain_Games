<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;
use function Games\Calc\calc;
use function Games\Even\even;
use function Games\Nod\nod;
use function Games\Progression\progression;
use function Games\Prime\prime;

function greeting()
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
    return $name;
}

function intro(?string $game)
{
    switch ($game) {
        case "calc":
            line("What is the result of the expression?");
            break;
        case "even":
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case "gcd":
            line("Find the greatest common divisor of given numbers.");
            break;
        case "progression":
            line("What number is missing in the progression?");
            break;
        case "prime":
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
            break;
    }
}


function examination(?string $game)
{
    $name = greeting();
    intro($game);
    $truResult = "";
    $task = "";
    $count = 0;
    while ($count < 3) {
        if ($game == "calc") {
            [$task, $truResult] = calc();
        } elseif ($game == "even") {
            [$task, $truResult] = even();
        } elseif ($game == "gcd") {
            [$task, $truResult] = nod();
        } elseif ($game == "progression") {
            [$task, $truResult] = progression();
        } elseif ($game == "prime") {
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
    line("Congratulations, {$name}!");
}
