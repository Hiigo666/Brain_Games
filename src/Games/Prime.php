<?php

namespace Project\Games\Prime;

use function Project\Engine\examination;

use const Project\Engine\ROUNDS;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 20;

function prime()
{
    $prime = [];
    $symbol = 0;
    $trueAnswer = '';
    for ($j = 0; $j < ROUNDS; $j++) {
        $symbol = mt_rand(MIN_NUMBER, MAX_NUMBER);
        if (isPrime($symbol)) {
            $trueAnswer = "yes";
        } else {
            $trueAnswer = "no";
        }
        $prime[] = [$symbol, $trueAnswer];
    }
    $prime[] = [$symbol, $trueAnswer];
    return $prime;
}

function run()
{
    examination(prime(), GAME_DESCRIPTION);
}

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
