<?php

/*
 * Panaudoti array_merge funkcija
 * Panaudoti array_chunk funkcija
 */

$darbuotojai1 = [
    [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'amzius' => 23,
    ],
    [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'amzius' => 24,
    ],
];
$darbuotojai2 = [
    [
        'vardas' => 'Tomas',
        'pavarde' => 'Pavardenis',
        'amzius' => 23,
    ],
    [
        'vardas' => 'Vardas',
        'pavarde' => 'Jonusas',
        'amzius' => 24,
    ],
];

$pilnasSarasas = array_merge($darbuotojai1, $darbuotojai2);

echo '<pre>';
print_r(array_chunk($pilnasSarasas, 3));
echo '</pre>';

// naudojam array_column funkcija noritn gauti pavarde => vardas
// tikriname ar egzistuoja masyve indeksas kurio pavadinimas
// yra pavarde panaudojant array_key_exists
