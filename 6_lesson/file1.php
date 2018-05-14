<?php

//file_get_contents();

//file_put_contents();

$file = 'data.json';

$content = file_get_contents($file);

print_r($content);

$string = 'as krabas 11111';

file_put_contents('save.txt', $string);
