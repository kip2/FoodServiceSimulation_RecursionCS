<?php
class HawaiianPizza extends FoodItem {
    private int $cookingTime = 7;

    public function __construct() {
        $name = __CLASS__;
        $description = "This is HawaiianPizza.";
        $price = 16.0;
        parent::__construct($name, $description, $price);
    }

    public function getCookingTime():int {
        return $this->cookingTime;
    }

    public function __toString(){
        return $this->getName();
    }
}