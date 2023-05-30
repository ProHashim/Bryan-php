<?php

class Car {
    private $model;

    public function setmodel($model){

        $allowdModel = array("MB", "bmw");

        if(in_array($model, $allowdModel) ){
            $this->model = $model;
        }
        else{
            $this->model = "Not in our list";
        }
    }
    public function getmodel(){
        return $this->model;
    }
}

$obj = new Car();
// $obj->setmodel("bmw");
echo $obj->getmodel();



// same concept using magic method, __construct()


class Person {
    private $name;

    public function __construct($name){
echo "Function name: " . __FUNCTION__ . "\n";

        $allowedName = array("Hashim", "khan");

        if(in_array($name, $allowedName)){
        $this->name = $name;
        echo $name;
        echo "Class name: " . __CLASS__ . "\n";
        }
        else {
            echo "not existent";
        }


    }
}

$names = new Person("Hashim");


echo "Current line: " . __LINE__ . "\n";
echo "File path: " . __FILE__ . "\n";
echo "Directory: " . __DIR__ . "\n";

echo "Method name: " . __METHOD__ . "\n";
echo "Namespace: " . __NAMESPACE__ . "\n";
