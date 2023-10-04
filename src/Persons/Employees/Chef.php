<?php
// namespace FoodService;

require_once __DIR__ . '/Employee.php';

class Chef extends Employee {

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    public function prepareFood(FoodOrder $order): string {
    // todo: 何をするメソッドかを確認する
        // todo: 必須要件
        // todo: 食材を加工・調理することを表す
        return "";
    }

    public function introduction() :string {
        return "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. My ID is {$this->getEmployeeID()}. My salary is {$this->getSalary()}.\n";
    }

    // 名前を返す
    public function __toString(){
        // return __CLASS__;
        return $this->getName();
    }
}