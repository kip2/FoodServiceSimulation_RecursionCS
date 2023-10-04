<?php
class Fettuccine extends FoodItem {
    private float $price = 13.0;
    private int $cookingTime = 17;

    public function getCookingTime():int {
        return $this->cookingTime;
    }

    public function getPrice() : float{
        return $this->price;
    }

    // todo: 中身は何がいる？
    public function __toString(){
        return __CLASS__;
    }
}