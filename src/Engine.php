<?php

namespace Project\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function examination(array $dateGame, string $describe)
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

    for ($i = 0; $i < ROUNDS; $i++) {
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
