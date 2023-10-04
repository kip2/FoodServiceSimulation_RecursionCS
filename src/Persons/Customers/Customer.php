<?php

// namespace Person;
// namespace FoodService;

require_once __DIR__ . '/../Person.php';
require_once __DIR__ . '/../../Invoices/Invoice.php';

class Customer extends Person {
    private $interestedCategories;

    public function __construct($name, $age, $address, $interestedCategories) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->interestedCategories = $interestedCategories;

    }

    // 食べたいものからレストランで注文したいメニューを生成する
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

    // restaurant側にorder処理を委譲
    public function order(Restaurant $restaurant): Invoice{
        $orderCategories = $this->interestedCategories($restaurant);
        return $restaurant->order($orderCategories);
    }

    public function introduction() {
        $return_string = "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. ";

        $return_string .= "My interestedCategories is [ ";

        // interestedCategoriesをループして処理
        foreach ($this->interestedCategories as $key => $value) {
            $return_string .= "{$key}:{$value} ";
        }

        $return_string .= " ].\n";

        return $return_string;
    }

    // 名前を文字列で返す
    public function __toString(){
        // return __CLASS__;
        return $this->getName();
    }

}