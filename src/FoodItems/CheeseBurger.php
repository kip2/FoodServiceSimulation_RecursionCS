<?php

require 'FoodItem.php';

class CheeseBurger extends FoodItem {
    private float $price = 14.0;
    public function getPrice() :float{
        return $this->price;
    }

    public function __toString(){
        return __CLASS__;
    }
}