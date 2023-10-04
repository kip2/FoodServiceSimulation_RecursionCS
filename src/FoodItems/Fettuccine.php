<?php
class Fettuccine extends FoodItem {
    private int $cookingTime = 4;

    public function __construct() {
        $this->name = __CLASS__;
        $this->description = "This is Fettuccine.";
        $this->price = 13.0;
    }
    public function getCookingTime():int {
        return $this->cookingTime;
    }

    public function __toString(){
        return $this->getName();
    }
}