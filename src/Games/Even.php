<?php

namespace Project\Games\Even;

use function Project\Engine\examination;

use const Project\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function generateData()
{
    $data = [];
    for ($i = 1; $i <= ROUND_COUNT; $i++) {
        $question = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $result = even($question) ? 'yes' : 'no';
        $data[] = [$question, $result];
    }
    return $data;
}

function even(int $num)
{
    return $num % 2 === 0;
}

function run()
{
    examination(generateData(), GAME_DESCRIPTION);
}
