<?php

namespace Php\Project\Cli ;

use function Cli\line;
use function Cli\prompt;

function greeting()
{
    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
    return $name;
}
