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
    $question = 0;
    $result = '';
    for ($j = 0; $j < ROUNDS; $j++) {
        $question = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $result = isPrime($question) ? 'yes' : 'no';
        $prime[] = [$question, $result];
    }
    $prime[] = [$question, $result];
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
