<?php

// define('NAME', 'Mohamed');
// echo NAME;

class Goodbye
{
    public $name = 'Mohamed';
    const LEAVING_MESSAGE = "Thank you for visiting php67.test!";

    public function byebye()
    {
        // echo $this->name;
        echo self::LEAVING_MESSAGE;
    }
}

$greating = new Goodbye();
// $greating->name = "Hello";
// echo $greating->name;
// echo $greating::LEAVING_MESSAGE;
echo $greating->byebye();

// echo Goodbye->$name; // ERORR
echo Goodbye::LEAVING_MESSAGE;
