<?php

require_once __DIR__ . '/../Invoices/Invoice.php';

class Restaurant {
    /** @var FoodItem[] */
    private array $menus = [];

    /** @var Employee[] */ 
    private array $employees = [];

    public function __construct(array $menus, array $employees){
        $this->menus = $menus;
        $this->employees = $employees;
    }

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
        // todo: とりあえずエラーなしのコード
        $invoice = new Invoice();
        return $invoice;
    }

    public function hasMenu(string $category): bool {
        // menuの中にあるかどうかを判定
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
