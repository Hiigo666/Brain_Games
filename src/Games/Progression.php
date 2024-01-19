<?php

namespace Project\Games\Progression;

use function Project\Engine\examination;

use const Project\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const MIN_STEP = 1;
const MAX_STEP = 20;
const MIN_ELEMENTS = 6;
const MAX_ELEMENTS = 10;

function generateData()
{
    $data = [];
    for ($j = 1; $j <= ROUND_COUNT; $j++) {
        $progression = createProgression();
        $missingElement  = mt_rand(0, count($progression) - 1);
        $result = $progression[$missingElement];
        $progression[$missingElement] = "..";
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
    $finish = $step * mt_rand(MIN_ELEMENTS, MAX_ELEMENTS);
    $progression = range($step, $finish, $step);
    return $progression;
}
