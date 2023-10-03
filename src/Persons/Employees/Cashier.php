<?php

class Cashier extends Employee {
    public function generateOrder(string ...$categories, Restaurant $restaurant) : FoodOrder {
        // todo: エラーを除く最低限のコード
        $order = new FoodOrder();
        return $order;
    }
}