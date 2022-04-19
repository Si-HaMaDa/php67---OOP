<?php

abstract class Car
{
    public $name;
    public $model;

    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    abstract public function safty($var);

    public function intro()
    {
        echo "The Car is {$this->name} and the model is {$this->model}.";
    }
}

// $car = new Car('Kia', 'cerato'); // ERROR
// // $car->intro();
// var_dump($car);

class Kia extends Car
{
    public function safty($new)
    {
        echo 'Try!';
    }
}

$kia = new Kia('Kia', 'cerato');
$kia->safty('new');
var_dump($kia);
