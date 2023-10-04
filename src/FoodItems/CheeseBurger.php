<?php

require 'FoodItem.php';

class CheeseBurger extends FoodItem {
    private int $cookingTime = 2;
    public function __construct() {
        $name = __CLASS__;
        $description = "This is CheeseBurger.";
        $price = 14.0;
        parent::__construct($name, $description, $price);
    }

    public function getCookingTime():int {
        return $this->cookingTime;
    }

    // 名前を表示する
    public function __toString(){
        return $this->getName();
    }
}