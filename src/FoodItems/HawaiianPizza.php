<?php
class HawaiianPizza extends FoodItem {
    private float $price = 16.0;

    private int $cookingTime = 20;

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