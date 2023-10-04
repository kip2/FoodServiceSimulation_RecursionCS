<?php

require_once __DIR__ . '/../Other/Timestamp.php';
require_once __DIR__ . '/../FoodItems/FoodItem.php';

class FoodOrder {
    /** @var FoodItem[]  */
    private array $items = [];

    private Timestamp $orderTime;


}