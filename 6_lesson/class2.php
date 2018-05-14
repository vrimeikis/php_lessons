<?php

$autos = (object)[
    (object)[
        'model' => 'BMW',
        'marke' => '3',
    ],
    (object)[
        'model' => 'Audi',
        'marke' => 'A3',
    ],
];

$a = new Automobile($autos);

$a->printModel();
$a->printMarke();
print_r($a->getAutosObject());

class Automobile
{
    private $autos;

    public function __construct($autos)
    {
        $this->autos = $autos;
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

    function getAutosObject()
    {
        return $this->autos;
    }
}
