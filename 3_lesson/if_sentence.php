<?php

function buyProducts($eggs = true)
{
    $milk = 1;

    if ($eggs == true) {
        $milk = 10;
    }

    echo 'Pieno: ' . $milk . '<br>';
}

buyProducts(false);

//== === < > <= >= !==

$number = 10;

if ($number > 15) {
    echo 'tikrai taip';
} elseif ($number > 5) {
    echo 'lyg ir taip';
} else {
    echo 'tikrai ne';
}
echo '<br>';
// Loginiai operatoriai:
// && (and) || (or)

$prekesKiekis = 10;
$norimasKiekis = 11;
$galimaParduoti = true;

if ($norimasKiekis <= $prekesKiekis || $galimaParduoti != false) {
    echo 'dedam <br>';
} else {
    echo 'nededam <br>';
}

/*
 * Parasyti programa kurioje mes turime tris kintamuosius:
 *  - prekes kiekis,
 *  - norimas isigyti prekes kiekis.
 * Patkrinti ar prekes kiekis yra mazesnis arba lygus prekes
 * kiekiui parduotuveje, ar galima ja parduoti ir patkrinti ar
 * norimas isigyti prekes kiekis yra minimum 1.
 */

$prekesKiekis = 10;
$norimasKiekis = 3;
$galimaParduoti = true;

if (
    $norimasKiekis <= $prekesKiekis &&
    $galimaParduoti == true &&
    $norimasKiekis >= 1
) {
    echo 'galima';
} else {
    echo 'negalima';
}

echo '<br>';

if (
    $norimasKiekis <= $prekesKiekis &&
    $galimaParduoti == true
) {
    if ($norimasKiekis < 2) {
        echo 'negalima, nes min kiekis turi buti 2';
    } else {
        echo 'galima';
    }
} else {
    echo 'negalima';
}
