<?php

$masyvas = [
    0 => 4,
    1 => 2,
    2 => 65,
    3 => 3,
    4 => 2
];

function doubleArrayValues($array)
{
    foreach ($array as $key => $value) {
        $array[$key] = $value * 2;
    }

    return $array;
}

echo '<pre>';

print_r(doubleArrayValues($masyvas));

echo '</pre>';
