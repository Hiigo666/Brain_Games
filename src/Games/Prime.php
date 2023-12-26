<?php

namespace Project\Games\Prime;

use function Project\Engine\examination;

use const Project\Engine\COUNT;

const DESCRIBE = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 20;

function prime()
{
    $trueAnswer = "yes";
    for ($j = 0; $j < COUNT; $j++) {
        $symbol = mt_rand(MIN_NUMBER, MAX_NUMBER);
        if ($symbol <= 1) {
            $trueAnswer = "no";
        }
        for ($i = 2; $i <= sqrt($symbol); $i++) {
            if ($symbol % $i == 0) {
                $trueAnswer = "no";
            }
        }
        $prime[] = [$symbol, $trueAnswer];
    }
    return $prime;
}

function run()
{
    examination(prime(), DESCRIBE);
}
