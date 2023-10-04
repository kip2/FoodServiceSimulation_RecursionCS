<?php

// namespace Person;
// namespace FoodService;

require_once __DIR__ . '/../Person.php';

class Customer extends Person {
    private $order;

    public function __construct($name, $age, $address, $order) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->order = $order;

    }
    public function interestedCategories(Restaurant $restaurant): array {
        // todo: エラーを解消する最低限のコード
        return ["", ""];
    }

    public function introduction() {
        $return_string = "Hi, I'm {$this->getName()}. My age is {$this->getAge()}. My address is {$this->getAddress()}. ";

        $return_string .= "My order is [ ";

        // orderをループして処理
        foreach ($this->order as $key => $value) {
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