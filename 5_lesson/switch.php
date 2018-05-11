<?php

$countries = [
    'Kinija',
    'Indija',
    'Japonija',
];

foreach ($countries as $country) {
    switch ($country) {
        case 'Indija':
            echo 'Keliaujam paganyti karviu.<br>';
            break;
        case 'Kinija':
            travelToChina();
            break;
        default:
            echo 'Samsung<br>';
            break;
    }
}

function travelToChina()
{
    echo 'Valgysim daug ryziu.<br>';
}
