<?php

$masyvas6 = [
    [
        'bank' => 'swed',
        'payment_title' => 'Mokejimas uz prekes 1',
        'total' => 21.32,
    ],
    [
        'bank' => 'seb',
        'payment_title' => 'Mokejimas uz paslaugas',
        'total' => 32.52,
    ],
    [
        'bank' => 'dnb',
        'payment_title' => 'Mokejimas uz prekes 2',
        'total' => 12.84,
    ],

];

paymentInfo($masyvas6);

function paymentInfo($payments)
{
    foreach ($payments as $payment) {
        switch ($payment['bank']) {
            case 'swed':
                echo $payment['payment_title'];
                echo '<br>';
                break;
            case 'seb':
                printPaymentData($payment);
                break;
            default:
                echo 'Mokejimas siuo banku negalimas!';
                break;
        }
    }
}

function printPaymentData($paymentData)
{
    echo $paymentData['payment_title'] . ' ' .
        $paymentData['total'] . '<br>';
}
