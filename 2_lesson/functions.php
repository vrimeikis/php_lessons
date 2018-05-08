<?php




function pranesimas()
{
    echo 'ivykdytas sekmingai';
}

function plotas($weight, $height = 1)
{
    $plotas = $weight * $height;
    echo $plotas . '<br>';
}

function grazinamas($weight, $height)
{
    $plotas = $weight * $height;
    return $plotas;
}

plotas(3);
plotas(5, 5);
plotas(7, 7);
plotas(6, 76);

pranesimas();
