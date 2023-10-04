<?php

// namespace FoodService;

abstract class Person {
    private string $name;
    private int $age;
    private string $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}