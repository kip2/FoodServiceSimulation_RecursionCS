<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
use FoodOrders\FoodOrder;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Cashier extends Employee {

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address, $employeeID, $salary);
    }

    /**
     * Orderを受け取り、注文票を返す
     *
     * @param Restaurant $restaurant
     * @param array $categories
     * @return FoodOrder
     */
    public function generateOrder(Restaurant $restaurant , array $categories ) : FoodOrder {
        echo "{$this->getName()} received the order.\n";
        $order = new FoodOrder($categories);
        return $order;
    }
    
    /**
     * 領収書を生成
     *
     * @param FoodOrder $order
     * @return Invoice
     */
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
    public function __toString():string{
        return $this->getName();
    }
}