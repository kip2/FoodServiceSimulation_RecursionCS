<?php
class Fettuccine extends FoodItem {
    private int $cookingTime = 4;

    public function __construct() {
        $name = __CLASS__;
        $description = "This is Fettuccine.";
        $price = 13.0;
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