<?php

$createPrinter = function () {
    $myFavoriteNumber = 26;

    return function () use ($myFavoriteNumber) {
        echo "My favorite number is $myFavoriteNumber\n";
    };
};

$myPrinter = $createPrinter();
$myPrinter();
