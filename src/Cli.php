<?php

namespace BrainGames\Cli;

function line($text) {
    print_r($text);
}

function promt()
{
    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
}
