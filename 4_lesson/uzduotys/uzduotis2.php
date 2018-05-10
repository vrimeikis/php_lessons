<?php

$names = [
    'Jonas',
    'Petras',
    'Antanas',
];

function listNames($array)
{
    echo '<ul>';

    foreach ($array as $name) {
        echo '<li>' . $name . '</li>';
    }

    echo '</ul>';
}

listNames($names);
