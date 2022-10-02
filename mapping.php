<?php

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$doubledNumbers = array_map(fn ($x) => $x * 2, $numbers);

print_r($doubledNumbers);
