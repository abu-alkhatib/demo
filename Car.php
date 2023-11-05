<?php

abstract class Car {

    public $engineSize;
    public $color;

    public function getEngineSize() {

        return "1.6";

    }

    public function getColor() {

        return "UNKNOWN";
    }
}