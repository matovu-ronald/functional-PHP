<?php

$employees = [

    [
        'name' => 'Maron',
        'years_of_service' => 23
    ],

    [
        'name' => 'Vero',
        'years_of_service' => 3
    ],

    [
        'name' => 'Abbey',
        'years_of_service' => 6
    ],

    [
        'name' => 'John',
        'years_of_service' => 16
    ],
    [
        'name' => 'Martin',
        'years_of_service' => 30
    ],
    [
        'name' => 'Masaba',
        'years_of_service' => 17
    ],
];

function arraySort($array, $comparatorFunc)
{
    usort($array, $comparatorFunc);
    return $array;
}

$yearsOfServiceComparator = function ($a, $b) {
    // if ($a['years_of_service'] < $b['years_of_service']) {
    //     return -1;
    // } else if ($a['years_of_service'] > $b['years_of_service']) {
    //     return 1;
    // } else {
    //     return 0;
    // }
    return $a['years_of_service'] - $b['years_of_service'];
};

$sortedEmployees = arraySort($employees, $yearsOfServiceComparator);

print_r($sortedEmployees);
print_r($employees);
