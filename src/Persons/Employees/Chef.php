<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
use FoodOrders\FoodOrder;


class Chef extends Employee {

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    /**
     * 調理をして、かかった時間を報告する
     *
     * @param FoodOrder $order
     * @return string
     */
    public function prepareFood(FoodOrder $order): string {
        $totalTime = 0;
        foreach ($order->getItems() as $item) {
            echo "{$this->name} was cooking {$item}.\n";
            $totalTime += $item->getCookingTime();
        }
        return "{$this->name} took {$totalTime} minutes to cook.\n";
    }

    /**
     * 説明用文章を生成
     *
     * @return string
     */
    public function introduction() :string {
        return "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. My ID is {$this->getEmployeeID()}. My salary is {$this->getSalary()}.\n";
    }

    /**
     * 完全修飾名からクラス名を取り出す
     *
     * @return string
     */
    public function getClassName() :string{
        $tmp =  explode('\\', __CLASS__);
        return end($tmp);
    }

    /**
     * nameを返す
     *
     * @return string
     */
    public function __toString(): string{
        return $this->getName();
    }
}