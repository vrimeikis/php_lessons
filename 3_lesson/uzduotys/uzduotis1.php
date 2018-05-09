<?php

$masyvas = [
    0 => [
        0 => '1 kabinetas',
        1 => '2 kabinetas',
        2 => '3 kabinetas',
    ],
    '2_aukstas' => [
        0 => '4 kabinetas',
        1 => '5 kabinetas',
        2 => '6 kabinetas',
    ],
];

echo $masyvas[0][0];
echo '<br>';
echo $masyvas[0][1];
echo '<br>';
echo $masyvas[0][2];
echo '<br>';
echo $masyvas['2_aukstas'][0];
echo '<br>';
echo $masyvas['2_aukstas'][1];
echo '<br>';
echo $masyvas['2_aukstas'][2];
echo '<br>';
