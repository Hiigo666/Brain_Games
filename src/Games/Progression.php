<?php

namespace Project\Games\Progression;

use function Project\Engine\examination;

use const Project\Engine\ROUNDS;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const MIN_STEP = 1;
const MAX_STEP = 20;
const MIN_SIMPOLS = 6;
const MAX_SIMBOLS = 10;

function generateData()
{
    $data = [];
    for ($j = 0; $j < ROUNDS; $j++) {
        $progression = createProgression();
        $randSimpol = mt_rand(0, count($progression) - 1);
        $result = $progression[$randSimpol];
        $progression[$randSimpol] = "..";
        $data[] = [implode(" ", $progression), $result];
    }
    return $data;
}

function run()
{
    examination(generateData(), GAME_DESCRIPTION);
}

function createProgression()
{
    $step = mt_rand(MIN_STEP, MAX_STEP);
    $finish = $step * mt_rand(MIN_SIMPOLS, MAX_SIMBOLS);
    $progression = range($step, $finish, $step);
    return $progression;
}