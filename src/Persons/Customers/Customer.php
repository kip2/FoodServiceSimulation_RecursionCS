<?php

namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person {
    private $interestedCategories;

    public function __construct($name, $age, $address, $interestedCategories) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->interestedCategories = $interestedCategories;

    }

    /**
     * 食べたいものからレストランで注文したいメニューを生成する
     *
     * @param Restaurant $restaurant
     * @return array
     */
    public function interestedCategories(Restaurant $restaurant): array {
        $orderCategories = [];
        foreach ($this->interestedCategories as $key => $value) {
            if ($restaurant->hasMenu($key)) {
                for ($i = 0; $i < $value; $i++) {
                    array_push($orderCategories, $key);
                }
            }
        }
        return $orderCategories;
    }

    /**
     * restaurantにorder処理を委譲
     *
     * @param Restaurant $restaurant
     * @return Invoice
     */
    public function order(Restaurant $restaurant): Invoice{
        $this->printWantedToEat();
        $orderCategories = $this->interestedCategories($restaurant);
        $this->printOrder();
        return $restaurant->order($orderCategories);
    }

    /**
     * 食べたいものをprint
     *
     * @return void
     */
    private function printWantedToEat() : void {
        echo "{$this->name} wanted to eat ";
        foreach ($this->interestedCategories as $key => $value) {
            echo "{$key} ";
        }
        echo ".\n";
    }

    /**
     * orderをprint
     *
     * @return void
     */
    private function printOrder():void {
        echo "{$this->name} was looking at the menu, and ordered ";
        foreach ($this->interestedCategories as $key => $value) {
            echo "{$key} x {$value} ";
        }
        echo ".\n";
    }

    // 自己紹介用
    /**
     * 自己紹介用文字列を返す
     *
     * @return string
     */
    public function introduction() :string{
        $return_string = "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. ";

        $return_string .= "My interestedCategories is [ ";

        // interestedCategoriesをループして処理
        foreach ($this->interestedCategories as $key => $value) {
            $return_string .= "{$key}:{$value} ";
        }

        $return_string .= " ].\n";

        return $return_string;
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