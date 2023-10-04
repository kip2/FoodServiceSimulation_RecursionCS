<?php

// namespace FoodService;

require_once __DIR__ . '/Employee.php';

class Cashier extends Employee {

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    // orderを受け取り、注文票を返す
    // public function generateOrder(Restaurant $restaurant , string ...$categories ) : FoodOrder {
    public function generateOrder(Restaurant $restaurant , array $categories ) : FoodOrder {
        echo "{$this->getName()} received the order.\n";
        $order = new FoodOrder($categories);
        return $order;
    }
    
    public function generateInvoice(FoodOrder $order): Invoice{

        // invoice発行開始
        $invoice = new Invoice($order->getOrderTime());

        // 値段、時間をそれぞれ追加する
        foreach ($order->getItems() as $item) {
            $invoice->addPrice($item->getPrice());
            $invoice->addEstimatedTimeInMinutes($item->getCookingTime());
        }

        // invoice発行完了メッセージ
        echo "{$this->getName()} made the invoice.\n";

        return $invoice;
    }


    // 説明用のクラス
    public function introduction() :string {
        return "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. My ID is {$this->getEmployeeID()}. My salary is {$this->getSalary()}.\n";
    }

    // クラスネームを返す
    public function getClassName() {
        return __CLASS__;
    }

    // 名前を返す
    public function __toString(){
        return $this->getName();
    }
}