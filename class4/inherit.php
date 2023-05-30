<?php

class Parents{
    private $paretnProperty;
    protected $prop = "hey bro";
    public function __construct($paretnProperty){
        $this->paretnProperty = $paretnProperty; 
    }

    final public function met(){
        echo $this->paretnProperty;
    }
}
class Child extends Parents{
    private $childProperty;
    public function __construct(){

        echo "This is a protected propety -> $this->prop ";
    }
    // public function met(){
    //     echo "hel";
    // }
}

$obj = new Child("Passed");

$obj->met();