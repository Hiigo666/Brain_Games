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

    foreach ($dataGame as [$question, $result]) {
        line("Question: {$question}");
        $answer = prompt('Your answer');
        if ($answer === (string)$result) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line('Congratulations, %s!', $name);
}
