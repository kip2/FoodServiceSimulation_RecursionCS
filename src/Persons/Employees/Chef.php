<?php
// namespace FoodService;

require_once __DIR__ . '/Employee.php';

class Chef extends Employee {

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    // public function prepareOrder(Invoice $invoice, array $categories): Invoice {
    //     foreach($categories as $category) {
    //         $invoice->addEstimatedTimeInMinutes($this->prepareFood($category));
    //     }
    //     return $invoice;
    // }

    // 調理をして、かかった時間を報告する

    public function prepareFood(FoodOrder $order): string {
        $totalTime = 0;
        foreach ($order->getItems() as $item) {
            echo "{$this->name} was cooking {$item}.\n";
            $totalTime += $item->getCookingTime();
        }
        return "{$this->name} took {$totalTime} minutes to cook.\n";
    }

    // 自己紹介用
    public function introduction() :string {
        return "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. My ID is {$this->getEmployeeID()}. My salary is {$this->getSalary()}.\n";
    }

    // クラスネームを返す
    public function getClassName() : string {
        return __CLASS__;
    }

    // 名前を返す
    public function __toString(): string{
        return $this->getName();
    }
}