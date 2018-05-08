<?php

/**
 * Naudoti ceil funkcija
 */

function plyteliuKiekis($plytelesX, $plytelesY, $sienosPlotas)
{
    $plytelesPlotas = ($plytelesX + 0.4) * ($plytelesY + 0.4);
    $plyteliuKiekis = ceil($sienosPlotas / $plytelesPlotas);
    echo 'Reikalinga ' . $plyteliuKiekis;
}

plyteliuKiekis(12, 12, 1000);
