<?php

namespace FoodItems;
class Spaghetti extends FoodItem {

    private int $cookingTime = 3;

    public function __construct() {
        $name = $this->generateName();
        $description = "This is Spaghetti.";
        $price = 15.0;
        parent::__construct($name, $description, $price);
    }

    private function generateName():string {
        $tmp =  explode('\\', __CLASS__);
        return end($tmp);
    }
    public function getCookingTime():int {
        return $this->cookingTime;
    }

    // 名前をかえす
    public function __toString(){
        return $this->getName();
    }
}