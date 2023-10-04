<?php

require 'FoodItem.php';

class CheeseBurger extends FoodItem {
    private int $cookingTime = 10;
    public function __construct() {
        $this->name = __CLASS__;
        $this->description = "This is CheeseBurger.";
        $this->price = 14.0;
    }

    public function getCookingTime():int {
        return $this->cookingTime;
    }

    public function __toString(){
        return $this->getName();
    }
}