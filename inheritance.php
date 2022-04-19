<?php

class Car1
{
    public $name;
    public $model;

    /* public $engine;
    public $doors; */

    public function __construct($name, $model/* , $engine, $doors */)
    {
        $this->name = $name;
        $this->model = $model;
        /* $this->engine = $engine;
        $this->doors = $doors; */
    }
    public function intro()
    {
        echo "The Car1 is {$this->name} and the model is {$this->model}.";
    }
}


// $kia = new Car1('Kia', 'cerato');
// $kia->camera = 'Yes';
// $kia->color = 'Red';
// $kia->intro();

// $kia1 = new Car1('Kia', 'cerato');
// $kia1->camera = 'Yes';
// $kia1->color = 'White';
// $kia1->intro();

$car = new Car1('Kia', 'cerato');
// $car->intro();
var_dump($car);

echo '<br><br><br><br>';

class Kia extends Car1
{
    public $name = 'Kia';

    public $camera = 'Yes';

    function doors()
    {
        return '4';
    }
}


$certo = new Kia('Kia', 'cerato');
// $certo->intro();
var_dump($certo);
echo '<br><br><br><br>';
$copea = new Kia('Kia', 'copea');
// $copea->intro();
var_dump($copea);


class Copea extends Kia
{
    public $open;
}
