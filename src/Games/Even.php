<?php

namespace Project\Games\Even;

use function Project\Engine\examination;

use const Project\Engine\ROUNDS;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function even()
{
    $even = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $task = mt_rand(MIN_NUMBER, MAX_NUMBER);
        if ($task % 2 === 0) {
            $result = "yes";
        } else {
            $result = "no";
        }
        $even[] = [$task, $result];
    }
    return $even;
}

function run()
{
    examination(even(), GAME_DESCRIPTION);
}
