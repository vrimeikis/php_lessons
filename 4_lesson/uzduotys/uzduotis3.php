<?php

/*
 * Graziname naujai suformuota masyva is duotojo masyvo
 * pirmo ir paskutinio elemnto reiksmiu.
 * Naudojam array_shift() ir array_pop() funkcijas
 */

//$array = []; - sukuriamas naujas tuscias masyvas
//$array[] = 'reikmes1'; - prijungiama reikme
//              prie esamo masyvo pabaigos

$names = [
    'Jonas',
    'Petras',
    'Antanas',
];

/**
 * @param array $array
 */
function firstLast($array)
{
    $ret = [
        array_shift($array),
        array_pop($array),
    ];

    return $ret;
}

echo '<pre>';
print_r(firstLast($names));
echo '</pre>';
