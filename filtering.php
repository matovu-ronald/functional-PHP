<?php

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$isEven = function ($number) {
    return $number % 2 == 0;
};

$evenNumbers = array_values(array_filter($numbers, $isEven));

print_r($evenNumbers);
