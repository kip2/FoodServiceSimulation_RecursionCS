<?php

require_once __DIR__ . '/../Other/Timestamp.php';
require_once __DIR__ . '/../FoodItems/FoodItem.php';

class FoodOrder {
    /** @var FoodItem[]  */
    private array $items = [];

    private Timestamp $orderTime;

    public function __construct(array $foodItems) {
        $this->items = $foodItems;
        $this->orderTime = new Timestamp();
    }
    
    public function getItems():array {
        return $this->items;
    }

    public function getOrderTime(): Timestamp{
        return $this->orderTime;
    }

}