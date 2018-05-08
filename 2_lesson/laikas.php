<?php

/*
 * Naudoti floor funkcija
 *
 * Paduodant 26 valandas resultatas turi buti 1 diena(u)
 * ir 2 valandos(u)
 */

function kiekLaiko($valandos)
{
    $dienos = floor($valandos / 24);
    $val = $dienos * 24;
    echo $dienos . ' dienos(u) ir ' .
        ($valandos - $val) . ' valandos(u)';
}

kiekLaiko(26);
