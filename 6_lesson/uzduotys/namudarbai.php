<?php

$data1 = (object)[
    'cart' => (object)[
        'products' => [
            (object)[
                'id' => 23,
                'title' => 'Duona',
                'price' => 1.23,
                'quantity' => 2,
            ],
            (object)[
                'id' => 43,
                'title' => 'Suris',
                'price' => 3.65,
                'quantity' => 1,
            ],
        ],
    ],
    'customer' => (object)[
        'name' => 'Petras',
        'lastname' => 'Petraitis',
        'email' => 'petras@petraitis.com',
    ],
];

$a = new CartProducts($data1);
$a->calculateTotal();

class CartProducts
{
    private $products;

    public function __construct($cartProducts)
    {
        $this->products = $cartProducts->cart->products;
    }

    function calculateTotal()
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total = $total + ($product->price * $product->quantity);
        }

        echo 'Viso uzsakymas kainuos: ' . $total;
    }
}
