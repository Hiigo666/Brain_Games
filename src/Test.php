<?php

namespace Php\Project\Test;

function welcome($text)
{
    line('Добро пожаловать в интеллектуальные игры!');
    $name = prompt('Можно узнать ваше имя?');
    line("Привет %s!", $name);
}
