<?php
class Spaghetti extends FoodItem {
    private float $price = 15.0;

    public function getPrice() :float{
        return $this->price;
    }

    public function __toString(){
        return __CLASS__;
    }
}