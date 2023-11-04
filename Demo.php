<?php

class Car {

    public $modelNumber;
    public $manufactureDate;


    public function  setModelNumber($modelNumber, $prefix = "MODEL"){

        if ($modelNumber!=null) {
            $this->modelNumber =$prefix . $modelNumber;
        }
        else {
         $this->modelNumber = $prefix . "undefined";
        }

    }

    public function setManufactureDate($manufactureDate){

        $this->manufactureDate = $manufactureDate;
    }

}