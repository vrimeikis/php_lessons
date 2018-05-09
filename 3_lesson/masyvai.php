<?php

$masyvas1 = [
    'isplauti indus',
    'isvalyti grindis',
    'isnesti siukles',
    'pavedzioti suni',
];

$masyvas2 = [
    'pirmas' => 'isplauti indus',
    'antras' => 'isvalyti grindis',
    '2' => 'isnesti siukles',
    5 => 'pavedzioti suni',
];

$masyvas3 = [
    'pavadinimas' => 'Automobiliai',
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
];

echo '<pre>';
print_r($masyvas1);
print_r($masyvas2);
print_r($masyvas3);
echo '</pre>';
