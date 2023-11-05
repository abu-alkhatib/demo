<?php

class Audi extends Car{

   public function __construct($engineSize, $color) {

        $this->engineSize=$engineSize;
        $this->color=$color;
}
    public function getEngineSize() {

       if( !empty($this->engineSize) ) {

           return $this->engineSize;
       }

       else {

           return "NULL";

       }
    }

    public function getColor()
    {
        return $this->color;
    }
}