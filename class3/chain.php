<?php

// chaining the code

class Car {
    public $tank;

    public function fill($float){
        $this->tank += $float;
        return $this;
    }
    public function ride($float){
        $miles = $float;
        $gallons = $miles/50;
        $this->tank -= $gallons;
        return $this;
    }

}

$bmw = new Car();
$tank = $bmw->fill(10) ->ride(40) -> tank;
$tank = $bmw ->ride(40) -> tank;
$tank = $bmw ->ride(40) -> tank;


echo $tank;