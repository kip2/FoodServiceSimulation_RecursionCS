<?php

require 'FoodItem.php';

class CheeseBurger extends FoodItem {
    private float $price = 14.0;
    private int $cookingTime = 10;

    public function getCookingTime():int {
        return $this->cookingTime;
    }

    public function getPrice() :float{
        return $this->price;
    }

    public function __toString(){
        return __CLASS__;
    }
}