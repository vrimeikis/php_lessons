<?php

define('PAVADINIMAS', 'puslpais');
define('KIEKIS', 10);

if (defined('PAVADINIMAS'))
{
    echo PAVADINIMAS;
} else {
    echo 'Please define PAVADINIMAS';
}

echo '<br>';

$norimasKiekis = 15;

if (KIEKIS >= $norimasKiekis) {
    echo 'galime deti i krepseli';
} else {
    echo 'truksta kiekio parduotuveje';
}
