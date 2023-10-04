<?php
class Spaghetti extends FoodItem {
    // private float $price = 15.0;

    private int $cookingTime = 3;

    public function __construct() {
        $name = __CLASS__;
        $description = "This is Spaghetti.";
        $price = 15.0;
        parent::__construct($name, $description, $price);
    }

    public function getCookingTime():int {
        return $this->cookingTime;
    }
    public function __toString(){
        return $this->getName();
    }
}