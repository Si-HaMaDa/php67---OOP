<?php

// $fruits = [
//     [
//         'name' => 'Apple',
//         'color' => 'Red'
//         'weight'=> '1'
//     ],
//     [
//         'name' => 'Orange',
//         'color' => 'Orange'
//     ],
// ];

// function
// class

class fruit
{
    public $name;
    public $color;
    public $weight;

    // Methods
    function set_name($val)
    {
        $this->name = $val;
    }
    function set_color($val)
    {
        $this->color = $val;
    }
    function set_weight($val)
    {
        $this->color = $val;
    }

    function get_name()
    {
        return $this->name;
    }

    function identity()
    {
        echo '<br><br>This fruit is ' . $this->name . ', and the color is ' . $this->color;
    }
}

$apple = new fruit();

// $apple->name = 'Apple';
// $apple->set_name('Apple');
$apple->color = 'Red';
$apple->weight = '1';
$apple->new = 'new';

var_dump($apple);
echo $apple->get_name();
$apple->identity();
echo '<br>';
var_dump($apple instanceof fruit);

echo '<br><br><br><br>';

$orange = new fruit();

$orange->name = 'Orange';
$orange->color = 'Orange';
$orange->weight = '2';

var_dump($orange);
echo $orange->get_name();
$orange->identity();
