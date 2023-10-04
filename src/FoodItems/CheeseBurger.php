<?php

require 'FoodItem.php';

class CheeseBurger extends FoodItem {
    // todo: 中身は何がいる？

    public function __toString(){
        return __CLASS__;
    }

    // public function test() {
    //     echo "hello";
    // }

}

// $burger = new CheeseBurger();
// echo $burger;