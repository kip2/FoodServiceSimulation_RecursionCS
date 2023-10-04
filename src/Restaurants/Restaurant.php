<?php

class Restaurant {
    /** @var FoodItem[] */
    private array $menu = [];

    /** @var Employee[] */ 
    private array $employee = [];

    public function __construct(array $menu, array $employee){
        $this->menu = $menu;
        $this->employee = $employee;
    }

    public function order(string ...$categories): Invoice{
        // todo: とりあえずエラーなしのコード
        $invoice = new Invoice();
        return $invoice;
    }

}
