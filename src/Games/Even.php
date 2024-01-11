<?php

namespace Project\Games\Even;

use function Project\Engine\examination;

use const Project\Engine\ROUNDS;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function generateData()
{
    $Data = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $questioin = mt_rand(MIN_NUMBER, MAX_NUMBER);
        if (even($questioin)) {
            $result = "yes";
        } else {
            $result = "no";
        }
        $Data[] = [$questioin, $result];
    }
    return $Data;
}

function even(int $num)
{
    return $num % 2 === 0;
}

function run()
{
    examination(generateData(), GAME_DESCRIPTION);
}
