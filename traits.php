<?php

abstract class phone
{
    public $name;
    public $model;

    function open()
    {
        echo 'Open. ';
    }
}

trait touch
{
    public function touch()
    {
        echo 'Methods touchz';
    }
}

trait faceDtection
{
    public function faceDtection()
    {
        echo 'Methods faceDtection';
    }
}

trait charge
{
    public function charge()
    {
        echo 'Methods charge';
    }
}
trait buttons
{
    public function buttons()
    {
        echo 'Methods buttons';
    }
}



class Iphone extends phone
{
    use touch, faceDtection;
}

$iphone = new Iphone();
// $iphone->faceDtection();

class Samsung extends phone
{
    use touch, faceDtection, charge;
}

$samsung = new Samsung();
$samsung->faceDtection();

class Nokia extends phone
{
    use buttons, charge;
}
