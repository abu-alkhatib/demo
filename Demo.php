<?php

class Car {

    public $modelNumber;
    public $manufactureDate;


    public function  setModelNumber($modelNumber, $prefix = "MODEL"){

        if ( !empty($modelNumber) ) {
            $this->modelNumber = $prefix . $modelNumber;
        }
        else {
         $this->modelNumber = $prefix . "undefined";
        }

    }

    public function setManufactureDate($manufactureDate){

        if ( !empty($manufactureDate) ) {
            $this->manufactureDate = $manufactureDate;

        }
        else {
           throw new \http\Exception\BadHeaderException();
        }
    }

}