<?php

require_once __DIR__ . '/../Invoices/Invoice.php';
require_once __DIR__ . '/../FoodOrders/FoodOrder.php';
require_once __DIR__ . '/../Persons/Employees/Employee.php';
require_once __DIR__ . '/../Persons/Employees/Cashier.php';
require_once __DIR__ . '/../Persons/Employees/Chef.php';

class Restaurant {
    /** @var FoodItem[] */
    private array $menus = [];

    /** @var Employee[] */ 
    private array $employees = [];

    public function __construct(array $menus, array $employees){
        $this->menus = $menus;
        $this->employees = $employees;
    }

    // 自己紹介用
    public function introduction() {
        $return_string = "Hi, menu are [ ";

        // メニューを連結する
        foreach ($this->menus as $menu) {
            $return_string .= $menu . " ";
        }
        $return_string .= "]. ";

        $return_string .= "Staff are [ ";
        // staffを連結する
        foreach ($this->employees as $employee) {
            $return_string .= $employee->getName() . ". ";
        }

        $return_string .= "]";
        $return_string .= ".\n";
        return $return_string;
    }

    /**
     * @psalm-param array<string, int> $categories
     */
    public function order(array $categories): Invoice{

        // cashierを探して、注文表を作成するよう依頼
        $cashier = $this->getCashier();
        $foodOrder = $cashier->generateOrder($this, $categories);

        // シェフを探して、注文を捌くように依頼
        $chef = $this->getChef();
        echo $chef->prepareFood($foodOrder);

        // cahierに請求書の発行を依頼
        $invoice = $cashier->generateInvoice($foodOrder);

        return $invoice;
    }


    // 従業員リストの先頭にいるシェフを呼びだす
    private function getChef() : Chef{
        foreach ($this->employees as $employee) {
            if ($employee->getClassName() == "Chef") {
                return $employee;
            }
        }
    }

    // 従業員リストの先頭にいるレジ係を呼ぶ
    private function getCashier(): Cashier{
        foreach ($this->employees as $employee) {
            if ($employee->getClassName() == "Cashier") {
                return $employee;
            }
        }
    }

    // menuの中にあるかどうかを判定
    public function hasMenu(string $category): bool {
        foreach($this->menus as $menu) {
            if ($menu == $category) {
                return True;
            }
        }
        return False;
    }

    // クラスネームを文字列で返す
    public function __toString(){
        return __CLASS__;
    }

}
