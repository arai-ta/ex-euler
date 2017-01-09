<?php

function prob001($num) {
    #$naturals = [];
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            #$naturals[] = $i;
            $sum += $i;
        }
    }
    return $sum;
}

var_dump(prob001(10));
var_dump(prob001(1000));

