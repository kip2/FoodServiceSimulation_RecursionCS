<?php
class Fettuccine extends FoodItem {
    private int $cookingTime = 17;

    public function __construct() {
        $this->name = __CLASS__;
        $this->description = "This is Fettuccine.";
        $this->price = 13.0;
    }
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