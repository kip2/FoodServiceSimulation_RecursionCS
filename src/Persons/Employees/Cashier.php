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


    // 説明用のクラス
    public function introduction() :string {
        return "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. My ID is {$this->getEmployeeID()}. My salary is {$this->getSalary()}.\n";
    }

    // 名前を返す
    public function __toString(){
        // return __CLASS__;
        return $this->getName();
    }
}