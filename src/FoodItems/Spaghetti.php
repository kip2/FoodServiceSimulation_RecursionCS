<?php
class Spaghetti extends FoodItem {
    // private float $price = 15.0;

    private int $cookingTime = 16;

    public function __construct() {
        $this->name = __CLASS__;
        $this->description = "This is Spaghetti.";
        $this->price = 15.0;
    }

    public function getCookingTime():int {
        return $this->cookingTime;
    }
    public function __toString(){
        return $this->getName();
    }
}