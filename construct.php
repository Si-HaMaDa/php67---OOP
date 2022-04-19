<?php


class Fruit1
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        echo 'Hello from Construct!';
        $this->name = $name;
        $this->color = $color;
    }

    function set_name($val)
    {
        // echo 'Hello from Set name!';
        $this->name = $val;
    }

    function get_name()
    {
        // echo 'Hello from Get name!';
        return $this->name;
    }

    function get_color()
    {
        // echo 'Hello from Get color!';
        return $this->color;
    }

    function __destruct()
    {
        echo "The fruit1 is {$this->name}.";
    }
}

$apple = new Fruit1('Apple', 'Red');
// $apple->__construct('Apple', 'Red'); //Wrong
// $apple->get_name();
// $apple->set_name('Apple');
// echo $apple->get_name();
// echo $apple->get_color();

echo '<br><br><br><br>';

$orange = new Fruit1('Orange', 'Orange');
// echo $orange->get_name();
// echo $orange->get_color();
