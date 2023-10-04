<?php
class HawaiianPizza extends FoodItem {
    private float $price = 16.0;

    public function getPrice() :float{
        return $this->price;
    }

    public function __toString(){
        return __CLASS__;
    }
}