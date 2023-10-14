<?php

namespace FoodItems;

use FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    private int $cookingTime = 2;
    public function __construct() {
        $name = $this->generateName();
        $description = "This is CheeseBurger.";
        $price = 14.0;
        parent::__construct($name, $description, $price);
    }

    /**
     * 完全修飾名からクラスネームのみを取り出す
     *
     * @return string
     */
    private function generateName():string {
        $tmp =  explode('\\', __CLASS__);
        return end($tmp);
    }

    /**
     * 調理時間を返す
     *
     * @return integer
     */
    public function getCookingTime():int {
        return $this->cookingTime;
    }

    /**
     * クラスの名前を返す
     *
     * @return string
     */
    public function __toString(){
        return $this->getName();
    }
}
