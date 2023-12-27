<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;

const COUNT = 3;

/*function intro($game)
{
    switch ($game) {
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
*/

function examination($dateGame, $describe)
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
    line($describe);

    $tasks = [];
    $results = [];

    foreach ($dateGame as [$task, $result]) {
        $tasks[] = $task;
        $results[] = $result;
    }

    for ($i = 0; $i < COUNT; $i++) {
        line("Question: {$tasks[$i]}");
        $answer = prompt('Your answer');
        if ($answer == $results[$i]) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$results[$i]'");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}
