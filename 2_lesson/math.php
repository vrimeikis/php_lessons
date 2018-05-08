<?php
$number = -5;

echo 'ABS(modulis): ' . abs($number) . '<br>';

$ceil = -3.6743;

echo 'Apvaliname i didziaja puse: ' . ceil($ceil). '<br>';

echo 'Apavaliname i mazaja puse:' . floor($ceil) . '<br>';

$mas = [3, 4, 9, 2];

echo 'Min reiksme is masyvo: ' . min($mas) . '<br>';
echo 'Max reiksme is masyvo: ' .max($mas) . '<br>';
echo 'Max is skaiciu eiles: ' . max(4,2,5, 2) . '<br>';
echo 'Atsitiktinis skaicius: ' . mt_rand(4, 30). '<br>';
echo 'PI reiksme: ' . pi(). '<br>';
echo 'PI reiksme is konstantos: ' . M_PI . '<br>';

echo 'Apvaliname su kableliu: ' . round($ceil, 2). '<br>';

$sqrt = 10;

echo 'Kvadratine saknis: ' . sqrt($sqrt). '<br>';

$kintamasis = round($ceil, 2);
$kintamasis = abs($kintamasis);

$kintamasis = abs(round($ceil, 2));

echo $kintamasis;
