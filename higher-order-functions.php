<?php

$divide = function ($x, $y) {
    return $x / $y;
};

$secondArgIsntZero = function ($func) {
    return function (...$args) use ($func) {
        if ($args[1] == 0) {
            echo "Cannot divide by zero!\n";
            return null;
        }

        return $func(...$args);
    };
};

$makeSafeDivision = $secondArgIsntZero($divide);

echo $makeSafeDivision(10, 2);
