<?php

class Audi extends Car{

   public function __construct($engineSize, $color) {

        $this->engineSize=$engineSize;
        $this->color=$color;
}
    public function getEngineSize() {
        return $this->engineSize;
    }
}