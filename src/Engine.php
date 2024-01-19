<?php

namespace Project\Engine;

use function Project\Cli\greeting;
use function cli\line;
use function cli\prompt;

const ROUND_COUNT  = 3;

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
    for ($i = 1; $i <= ROUND_COUNT; $i++) {
        $questionIndex = $i - 1;
        line("Question: {$questions[$questionIndex]}");
        $answer = prompt('Your answer');
        if ($answer === $results[$questionIndex]) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$results[$questionIndex]'");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line('Congratulations, %s!', $name);
}
