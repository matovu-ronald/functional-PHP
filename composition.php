<?php

$peoples = [
    [
        'full_name' => 'Matovu Ronald',
        'age' => 30,
        'height' => 5.8,
    ],
    [
        'full_name' => 'Veronica Lubowa',
        'age' => 24,
        'height' => 5.5
    ],
    [
        'full_name' => 'Abbey Mugula',
        'age' => 34,
        'height' => 5.7
    ],
    [
        'full_name' => 'Nantenza Harriet',
        'age' => 48,
        'height' => 5.3
    ]
];

$withFirstAndLastName = function ($person) {
    return array_merge(
        $person,
        [
            'first_name' => explode(' ', $person['full_name'])[0],
            'last_name' => explode(' ', $person['full_name'])[1],
        ]
    );
};

$heightInchesToMeters = function ($person) {
    return array_merge(
        $person,
        [
            'height' => $person['height'] * 0.0254,
        ]
    );
};

$addInitials = function ($person) {
    return array_merge(
        $person,
        [
            'initials' => $person['first_name'][0] . $person['last_name'][0]
        ]
    );
};

$compose = function (...$funcs) {
    return function ($data) use ($funcs) {
        return array_reduce(
            $funcs,
            fn ($carry, $func) => $func($carry),
            $data,
        );
    };
};

$formatPerson = $compose($withFirstAndLastName, $heightInchesToMeters, $addInitials);

$formattedPeople = array_map($formatPerson, $peoples);

print_r($formattedPeople);
