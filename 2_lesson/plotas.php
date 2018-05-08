<?php

function plotas($weight, $height)
{
    $plotas = $weight * $height;
    return $plotas;
}

$plokstuma1 = plotas(4, 3);
$plokstuma2 = plotas(3, 6);
$plokstuma3 = plotas(4, 6);

$suma = ($plokstuma1 + $plokstuma2 + $plokstuma3) * 2;

echo 'Figuros plotas: ' . $suma;
