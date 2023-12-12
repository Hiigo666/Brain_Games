<?php

namespace Games\even;

function even(){
    $quest = mt_rand(0, 100);
    if($quest % 2 === 0) {
        $result = "yes";
    }else {
        $result = "no";
    }
$return = [$quest, $result] ;
return $return;
}

