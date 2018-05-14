<?php

$data = (object)[
    'cart' => (object)[
        'products' => [
            (object)[
                'id' => 23,
                'title' => 'Duona',
                'price' => 1.23,
                'quantity' => 1,
            ],
            (object)[
                'id' => 43,
                'title' => 'Suris',
                'price' => 3.65,
                'quantity' => 1,
            ],
        ],
        'total' => 4.88,
    ],
    'customer' => (object)[
        'name' => 'Petras',
        'lastname' => 'Petraitis',
        'email' => 'petras@petraitis.com',
    ],
];

$a = new CartProducts($data->cart->products);

$a->printProductInfo();

class CartProducts
{
    private $allCart;

    public function __construct($products)
    {
        $this->allCart = $products;
    }

    public function printProductInfo()
    {
        foreach ($this->allCart as $product) {
            echo $product->id . '<br>';
            echo $product->title . '<br>';
            echo $product->price . '<br>';
            echo $product->quantity . '<br>';

        }
    }
}
