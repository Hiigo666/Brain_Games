<?php

namespace Project\Games\Even;

use function Project\Engine\examination;

use const Project\Engine\COUNT;

const DESCRIBE = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function even()
{
    for ($i = 0; $i < COUNT; $i++) {
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
    examination(even(), DESCRIBE);
}
