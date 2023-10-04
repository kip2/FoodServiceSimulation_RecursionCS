<?php
// namespace FoodService;

require_once __DIR__ . '/Employee.php';

class Chef extends Employee {
    // todo: 何をするメソッドかを確認する

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    public function prepareFood(FoodOrder $order): string {
        // todo: 必須要件
        // todo: 食材を加工・調理することを表す
        return "";
    }

    public function introduction() :string {
        return "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. My ID is {$this->getEmployeeID()}. My salary is {$this->getSalary()}.\n";
    }

    // クラスネームを文字列で返す
    public function __toString(){
        return __CLASS__;
    }
}