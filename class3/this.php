<?php

class Car {
    public $model;

    public function assign() {
        // $assigns = $this->model = "S3";
        $assigns = $this->model;
        return $assigns;
    }
}

$jeep = new Car();
$jaguar = new Car();

$jeep->model = "WW3";

echo $jeep->assign();
