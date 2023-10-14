<?php

namespace FoodItems;

class Fettuccine extends FoodItem {
    private int $cookingTime = 4;

    public function __construct() {
        $name = $this->generateName();
        $description = "This is Fettuccine.";
        $price = 13.0;
        parent::__construct($name, $description, $price);
    }

    private function generateName():string {
        $tmp =  explode('\\', __CLASS__);
        return end($tmp);
    }

    public function getCookingTime():int {
        return $this->cookingTime;
    }

    // 名前を表示する
    public function __toString(){
        return $this->getName();
    }
}