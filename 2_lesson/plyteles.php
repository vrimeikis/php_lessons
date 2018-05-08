<?php

/**
 * Naudoti ceil funkcija
 */

function plyteliuKiekis($plytelesX, $plytelesY, $sienosPlotas)
{
    $plytelesPlotas = $plytelesX * $plytelesY;
    $plyteliuKiekis = ceil($sienosPlotas / $plytelesPlotas);
    echo 'Reikalinga ' . $plyteliuKiekis;
}

plyteliuKiekis(12, 12, 1000);
