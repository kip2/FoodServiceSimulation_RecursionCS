<?php
class Spaghetti extends FoodItem {
    private float $price = 15.0;

    private int $cookingTime = 16;

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