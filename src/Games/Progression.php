<?php

namespace Project\Games\Progression;

use function Project\Engine\examination;

use const Project\Engine\ROUNDS;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const MIN_NUMBER = 1;
const MAX_START_NUMBER = 20;
const MAX_NUMBER = 100;
const MIN_INDEX = 6;
const MAX_INDEX = 10;

function progression()
{
    $progression = [];
    for ($j = 0; $j < ROUNDS; $j++) {
        do {
            $start = mt_rand(MIN_NUMBER, MAX_START_NUMBER);
            $finish = mt_rand($start * 2, MAX_NUMBER);
            $step = $start;
            $genArr = range($start, $finish, $step);
            $i = count($genArr);
        } while ($i < MIN_INDEX || $i > MAX_INDEX);

        $randSimpol = mt_rand(0, count($genArr) - 1);
        $trueResult = $genArr[$randSimpol];
        $genArr[$randSimpol] = "..";
        $progression[] = [implode(" ", $genArr), $trueResult];
    }
    return $progression;
}

function run()
{
    examination(progression(), GAME_DESCRIPTION);
}
