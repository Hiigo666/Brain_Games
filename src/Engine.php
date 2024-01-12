<?php

namespace Project\Engine;

use function Project\Cli\greeting;
use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function examination(array $dataGame, string $describe)
{
    $name = greeting();
    line($describe);

    $questions = [];
    $results = [];

    foreach ($dataGame as [$question, $result]) {
        $questions[] = $question;
        $results[] = (string)$result;
    }
    for ($i = 0; $i < ROUNDS; $i++) {
        line("Question: {$questions[$i]}");
        $answer = prompt('Your answer');
        if ($answer === $results[$i]) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$results[$i]'");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line('Congratulations, %s!', $name);
}
