<?php

class Automobile
{
    public function __construct()
    {
        $this->autos = (object)[
            (object)[
                'model' => 'BMW',
                'marke' => '3',
            ],
            (object)[
                'model' => 'Audi',
                'marke' => 'A3',
            ],
        ];
    }

    function printModel()
    {
        foreach ($this->autos as $auto) {
            echo $auto->model . '<br>';
        }
    }

    function printMarke()
    {
        foreach ($this->autos as $auto) {
            echo $auto->marke . '<br>';
        }
    }
}

$a = new Automobile();

echo '<pre>';
print_r($a->autos);
echo '</pre>';

$a->printModel();
$a->printMarke();
