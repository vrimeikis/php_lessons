<?php

$auto1 = (object)[
    'model' => 'BMW',
    'marke' => '3',
];

$auto2 = (object)[
    'model' => 'Audi',
    'marke' => 'A3',
];

$a = new Automobile();

$a->getData();
echo '<br>';
$a->setData($auto1);
echo '<br>';
$a->getData();
echo '<br>';

$a->setData($auto2, 'antras');
echo '<br>';
$a->getData();
echo '<br>';

$a->printModel();

class Automobile
{
    private $autos;

    public function __construct()
    {
        $this->autos = (object)[];
    }

    function setData($data, $index = 'pirmas')
    {
        $this->autos->$index = $data;
    }

    function getData()
    {
        print_r($this->autos);
    }

    function printModel()
    {
        foreach ($this->autos as $auto) {
            echo $auto->model . '<br>';
        }
    }
}
