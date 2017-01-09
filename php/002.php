<?php

function fib($first, $second) {
    yield $first;
    while (1) {
        yield $second;
        // swap
        list($first, $second) = array($second, $first + $second);
    }
}

function fib_until($limit) {
    foreach (fib(1, 2) as $num) {
        if ($num > $limit) break;
        yield $num;
    }
}

function prob002($num) {
    $sum = 0;
    foreach (fib_until($num) as $n) {
        #echo $n." ";
        if ($n % 2 === 0) {
            $sum += $n;
        }
    }
    return $sum;
}

var_dump(prob002(400));
var_dump(prob002(4000000));

