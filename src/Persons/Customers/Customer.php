<?php

// namespace Person;
namespace FoodService;

require_once __DIR__ . '/../Person.php';

class Customer extends Person {
    public function interestedCategories(Restaurant $restaurant): array {
        // todo: エラーを解消する最低限のコード
        return ["", ""];
    }

    // クラスネームを文字列で返す
    public function __toString(){
        return __CLASS__;
    }

}