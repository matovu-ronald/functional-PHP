<?php

$add = fn ($x, $y, $z) => $x + $y + $z;

$addPartial = fn ($x) => fn ($y, $z) => $add($x, $y, $z);

$add5 = $addPartial(5);
$sum = $add5(6, 7);
$sum2 = $addPartial(4)(5, 6);


echo $sum . "\n";
echo $sum2 . "\n";
