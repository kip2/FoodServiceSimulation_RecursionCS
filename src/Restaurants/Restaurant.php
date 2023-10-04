<?php

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
        $return_string = "";

        $return_string .= "Hi, menu are [ ";

        // メニューを連結する
        foreach ($this->menus as $menu) {
            $return_string .= $menu . " ";
        }
        $return_string .= "]. ";

        $return_string .= "Staff are [ ";
        // staffを連結する
        foreach ($this->employees as $employee) {
            $return_string .= $employee . " ";
        }

        $return_string .= "]";

        $return_string .= ".\n";

        return $return_string;
    }

    public function order(string ...$categories): Invoice{
        // todo: とりあえずエラーなしのコード
        $invoice = new Invoice();
        return $invoice;
    }

    // クラスネームを文字列で返す
    public function __toString(){
        return __CLASS__;
    }

}
