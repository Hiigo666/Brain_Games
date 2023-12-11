<?php

namespace Games\even;

use function cli\line;
use function cli\prompt;

#line("Ответьте «yes», если число четное, в противном случае ответьте «no»");
function even(){
$countAnswer = 0;
    $quest = mt_rand(0, 100);
    if($quest % 2 === 0) {
        $result = "yes";
    }else {
        $result = "no";
    }
$return = [$quest, $result] ;
return $return;
}

