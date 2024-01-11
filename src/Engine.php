<?php

namespace Project\Engine;

use function Project\Cli\greeting;
use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function examination(array $dateGame, string $describe)
{
    $name = greeting();
    line($describe);

    $tasks = [];
    $results = [];

    foreach ($dateGame as [$task, $result]) {
        $tasks[] = $task;
        $results[] = $result;
    }
    for ($i = 0; $i < ROUNDS; $i++) {
        line("Question: {$tasks[$i]}");
        $answer = (int)prompt('Your answer');
        var_dump($answer);
        if ($answer === $results[$i]) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$results[$i]'");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}
