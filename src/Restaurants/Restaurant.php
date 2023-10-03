<?php

class Restaurant {
    /** @var FoodItem[] */
    private array $menu = [];

    /** @var Employee[] */ 
    private array $employee = [];

    public function order(string ...$categories): Invoice{
        // todo: とりあえずエラーなしのコード
        $invoice = new Invoice();
        return $invoice;
    }

}
