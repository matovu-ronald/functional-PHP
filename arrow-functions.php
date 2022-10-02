<?php

$createMultiplier = function ($y) {
    // return function ($x) use ($y) {
    //     return $x * $y;
    // };

    return fn ($x) => $x * $y;
};

$multiplier = $createMultiplier(4);
echo $multiplier(2);
