<?php

$numbers = [20, 5, 6, 8, 3, 11];

function arraySort($array, ...$rest)
{
    sort($array, ...$rest);
    return $array;
}

$numbersSorted = arraySort($numbers);

print_r($numbers);
print_r($numbersSorted);
