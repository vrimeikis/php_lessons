<?php

$masyvas2 = ['Jonas', 'Petras', 'Antanas',];

printMas($masyvas2);

function printMas($array)
{
    foreach ($array as $item) {
        echo $item;
        echo '<br>';
    }
}
