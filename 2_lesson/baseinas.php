<?php

/**
 * Baseinas
 */

function plytelesBaseinui($ilgis, $plotis, $gylis)
{
    $baseinoPlotas = apskaiciuotiDugnoPlota($ilgis, $plotis) +
        apskaiciuotiSienuPlota($gylis, $ilgis) +
        apskaiciuotiSienuPlota($gylis, $plotis);
    $plytelesPlotas = plytelesPlotis(12, 12, 0.4);

    return ceil($baseinoPlotas / $plytelesPlotas);
}

function apskaiciuotiDugnoPlota($ilgis, $plotis)
{
    return $ilgis * $plotis;
}

function apskaiciuotiSienuPlota($gylis, $ilgis)
{
    return $gylis * $ilgis * 2;
}

function plytelesPlotis($ilgis, $plotis, $tarpas = 0)
{
    return ($ilgis + $tarpas) * ($plotis + $tarpas);
}

echo 'Reikalina plyteliu: ' .
    plytelesBaseinui(2500, 1000,300);
