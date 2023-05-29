<?php

class Car{
    public $names = "jeep";
    public $gears = 5;
    // if not initialized it will be NULL
    public $color;
    public function honk(){
        $honkWhenNeeded = $this->gears;
        return "I am honking with $honkWhenNeeded gears";
    }
}


// create an object
$obj = new Car();
// var_dump($obj);

// object operator  (->)

// echo $obj->names . "\n" . "helo";
// echo $obj->gears . "\n";
// $obj->gears = 4;
// echo "New value is \t" . $obj->gears;

$honk = $obj->honk();
echo $honk;
