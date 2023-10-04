<?php
class HawaiianPizza extends FoodItem {
    private int $cookingTime = 20;

    public function __construct() {
        $this->name = __CLASS__;
        $this->description = "This is HawaiianPizza.";
        $this->price = 16.0;
    }

    public function getCookingTime():int {
        return $this->cookingTime;
    }

    public function __toString(){
        return $this->getName();
    }
}