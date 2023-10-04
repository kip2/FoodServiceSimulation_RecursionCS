<?php

require_once __DIR__ . '/../Other/Timestamp.php';
require_once __DIR__ . '/../FoodItems/FoodItem.php';

class FoodOrder {
    /** @var FoodItem[]  */
    private array $items = [];

    private Timestamp $orderTime;

    public function __construct(array $foodItems) {
        // $this->items = $foodItems;
        $this->setItemArray($foodItems);
        $this->orderTime = new Timestamp();
    }

    // 文字列型の配列からFoodItemクラスのインスタンスを格納する
    private function setItemArray(array $items) :void{
        foreach($items as $item) {
            array_push($this->items, new $item());
        }
    }
    
    public function getItems():array {
        return $this->items;
    }

    public function getOrderTime(): Timestamp{
        return $this->orderTime;
    }

}