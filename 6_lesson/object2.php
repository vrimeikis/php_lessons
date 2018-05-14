<?php

$data1 = new stdClass();
$data1->auto1 = 'BMW';
$data1->auto2 = 'Audi';
$data1->auto3 = 'MB';

foreach ($data1 as $auto) {
    echo $auto . '<br>';
}

foreach ($data1 as $autoKey => $autoValue) {
    echo $data1->$autoKey . '<br>';
}
