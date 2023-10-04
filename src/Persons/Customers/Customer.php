<?php

// namespace Person;
namespace FoodService;

require_once __DIR__ . '/../Person.php';

class Customer extends Person {
    public function interestedCategories(Restaurant $restaurant): array {
        // todo: エラーを解消する最低限のコード
        return ["", ""];
    }

}