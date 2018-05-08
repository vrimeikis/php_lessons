<?php

include_once ('skaiciuotuvas.php');

$numbers = $_POST;

$sum = $numbers['number1'] + $numbers['number2'];

echo $sum;
