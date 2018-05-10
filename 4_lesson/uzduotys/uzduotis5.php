<?php

$masyvass1 = ['Elementas1', 'Elementas2'];
$masyvass2 = ['Elementas3', 'Elementas4', 'Elementas5'];

function merge2arrays($array1, $array2)
{
    return array_merge($array1, $array2);
}

print_r(merge2arrays($masyvass1, $masyvass2));
