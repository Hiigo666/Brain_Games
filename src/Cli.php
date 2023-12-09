<?php

namespace Php\Project\Cli ;

function line($text)
{
    print_r($text);
    print_r("\n");
}

function promt()
{
    return trim(fgets(STDIN));
}
