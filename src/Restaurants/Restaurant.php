<?php

namespace Restaurants;

use Invoices\Invoice;
use FoodItems\FoodItem;
use Persons\Employees\Cashier;
use Persons\Employees\Employee;
use Persons\Employees\Chef;


class Restaurant {
    /** @var FoodItem[] */
    private array $menus = [];

    /** @var Employee[] */ 
    private array $employees = [];

    public function __construct(array $menus, array $employees){
        $this->menus = $menus;
        $this->employees = $employees;
    }

    /**
     * 紹介用文章を作成
     *
     * @return string
     */
    public function introduction() :string{
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
     * 注文を処理し、請求書を発行
     *
     * @psalm-param array<string, int> $categories
     * @return Invoice
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


    /**
     * 従業員リストの先頭にいるレジ係を返す
     *
     * @return Chef
     */
    private function getChef() : Chef{
        foreach ($this->employees as $employee) {
            if ($employee->getClassName() == "Chef") {
                return $employee;
            }
        }
        // エラーを避けるため
        return new Chef("", 0, "", 0, 0);
    }

    /**
     * 従業員リストの先頭にいるレジ係を返す
     *
     * @return Cashier
     */
    private function getCashier(): Cashier{
        foreach ($this->employees as $employee) {
            if ($employee->getClassName() == "Cashier") {
                return $employee;
            }
        }
        // エラーを避けるため
        return new Cashier("", 0, "", 0, 0);
    }

    /**
     * $categoryがmenuに存在するかを判定
     *
     * @param string $category
     * @return boolean
     */
    public function hasMenu(string $category): bool {
        foreach($this->menus as $menu) {
            if ($menu == $category) {
                return True;
            }
        }
        return False;
    }

    /**
     * 完全修飾名を文字列で返す
     *
     * @return string
     */
    public function __toString():string{
        return __CLASS__;
    }

}
