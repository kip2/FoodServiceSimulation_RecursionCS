<?php

// namespace FoodService;

require_once __DIR__ . '/Employee.php';

class Cashier extends Employee {

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    public function generateOrder(Restaurant $restaurant , string ...$categories ) : FoodOrder {
        // todo: エラーを除く最低限のコード
        $order = new FoodOrder();
        return $order;
    }
}