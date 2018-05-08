<?php

$password = 'my_pasword';
$salt = 'gk6rctr4i65xckru';

$string = ' labAs as krabas ';
$number = 23;
$number1 = 123765434232.765549;

echo crypt($password, $salt ) . '<br>';

$array = explode(' ', $string);

print_r($array);
echo '<br>';
echo implode('|', $array);
echo '<br>';
echo lcfirst($string) . '<br>';
echo ucfirst($string) . '<br>';
echo strlen($string) . '<br>';
echo '1' . ltrim($string) . 'w<br>';
echo '2' . rtrim($string) . 'w<br>';
echo '3' . trim($string) . 'w<br>';
echo md5($password) . '<br>';
echo number_format($number, 2, '.', ' ') . '<br>';
echo number_format($number1, 2, '.', ' ') . '<br>';

echo sprintf('%s %d %%tekstas', $string, $number) . '<br>';

$html = '<p>tekstas</p>';

echo strip_tags($html) . '<br>';

$longText = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

echo substr($longText, 3, 5) . '<br>';

echo ucwords($string) . '<br>';

echo wordwrap($longText, 40, '<br>') . '<br>';

$string = "This\r\nis\n\ra\nstring\r";
echo nl2br($string, true);
