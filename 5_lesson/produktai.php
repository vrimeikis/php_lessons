<?php

$produktai = [
    [
        'title' => 'Knyga Kaip uzdirbti milijona',
        'price' => 4.3457,
    ],
    [
        'title' => 'Knyga Venulis kuris pardave Ferrari',
        'price' => 15.2345,
    ]
];

echo '<ul>';

foreach ($produktai as $product) {
    echo '<li>' . $product['title'] . '. Kaina: ' .
        formatPrice($product['price']) .  '</li>';
}

echo '</ul>';

function formatPrice($price)
{
    $ret = round($price, 2) . ' EUR';

    return $ret;
}
