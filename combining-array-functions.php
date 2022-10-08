<?php

$employees = [
    [
        'name' => 'Maron',
        'age' => 43,
        'salary' => 90000,
        'job_title' => 'developer'
    ],
    [
        'name' => 'Vero',
        'age' => 24,
        'salary' => 40000,
        'job_title' => 'supply chain specialist'
    ],
    [
        'name' => 'Abbey',
        'age' => 35,
        'salary' => 140000,
        'job_title' => 'developer'
    ],
    [
        'name' => 'Sharif',
        'age' => 36,
        'salary' => 200000,
        'job_title' => 'education officer'
    ],
    [
        'name' => 'Safina',
        'age' => 50,
        'salary' => 125000,
        'job_title' => "senior education officer"
    ]
];

// Get developers from the the list of employeees
$developers = array_filter(
    $employees,
    fn ($employee) => $employee['job_title'] == 'developer'
);

// Get developer salaries from the list of $developers
$developerSalaries = array_map(
    fn ($employee) => $employee['salary'],
    $developers
);

// Get the sum of developer salaries
$sumOfDeveloperSalaries = array_reduce(
    $developerSalaries,
    fn ($carry, $item) => $carry + $item
);

// Get the average of developer salaries
$averageOfDeveloperSalaries = $sumOfDeveloperSalaries / count($developerSalaries);

// Get non developers from the list of employees
$nonDevelopers = array_filter(
    $employees,
    fn ($employee) => $employee['job_title'] != 'developer'
);

// Get salaries of non developers
$nonDeveloperSalaries = array_map(
    fn ($employee) => $employee['salary'],
    $nonDevelopers
);

// Get the sum of the salaries of non developers
$sumOfNonDeveloperSalaries = array_reduce(
    $nonDeveloperSalaries,
    fn ($carry, $item) => $carry + $item
);

// Get the average of non developer salaries
$averageOfNonDeveloperSalaries = $sumOfNonDeveloperSalaries / count($nonDeveloperSalaries);

echo "The average developer salary is $averageOfDeveloperSalaries \n";
echo "The average non developer salary is $averageOfNonDeveloperSalaries";
