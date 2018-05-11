<?php

$auto = [
    [
        'marke' => 'Audi',
        'model' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    [
        'marke' => 'BMW',
        'model' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
    [
        'marke' => 'BMW',
        'model' => '320',
        'kubatura' => 1999,
        'metai' => 2017
    ]
];

autoList($auto);

function autoList($autos)
{
    echo '<ul>';

    foreach ($autos as $auto) {
        echo '<li>'. $auto['marke'] . ' ' .
            $auto['model'] . ' ' .
            transformNumberWithString($auto['kubatura'], 'cm3') .
            transformNumberWithString($auto['metai']) .'</li>';
    }

    echo '</ul>';
}

function transformNumberWithString($number, $addString = 'm.')
{
    return $number . ' ' . $addString . ' ';
}
