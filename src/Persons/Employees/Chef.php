<?php
// namespace FoodService;

require_once __DIR__ . '/Employee.php';

class Chef extends Employee {
    // todo: 何をするメソッドかを確認する

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    public function prepareFood(FoodOrder $order): string {
        return "";
    }
}