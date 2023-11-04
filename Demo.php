<?php

class Car {

    public $modelNumber;
    public $manufactureDate;


    public function  setModelNumber($modelNumber, $prefix = "MODEL"){

        $this->modelNumber = $prefix . $modelNumber;
    }

    public function setManufactureDate($manufactureDate){

        $this->manufactureDate = $manufactureDate;
    }

}