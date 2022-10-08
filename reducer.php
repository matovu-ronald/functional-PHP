<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$getSum = function ($carry, $item) {
    echo "carry = $carry item = $item \n";
    return $carry + $item;
};

$sum = array_reduce($numbers, $getSum, 0);

print_r($sum);
