<?php

$names1 = [
    'Ritah',
    'Deborah',
    'Peruth'
];


$names2 = [
    'Ronald',
    'Abbey',
    'Innocent'
];

$allNames = [
    'John',
    ...$names1,
    'Lawrence',
    ...$names2,
    'Peter'
];

print_r($allNames);

//////////////////////////////////////

$personData = [
    'name' => "Maron",
    'Age' => 31
];

$careerData = [
    'job' => 'Software Developer',
    'salary' => 12000
];

$personWithCareerData = array_merge($personData, $careerData);


print_r($personWithCareerData);

//////////////////////////////////////


$add = function (...$args) {
    $sum = 0;

    for ($i = 0; $i < count($args); $i += 1) {
        $sum += $args[$i];
    }
    return $sum;
};

$numbersToAdd = [1, 2, 3, 4, 5, 6, 7];

echo $add(...$numbersToAdd);

echo "\n";

echo $add(4, 5, 6, 3);
