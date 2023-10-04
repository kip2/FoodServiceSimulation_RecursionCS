<?php

abstract class FoodItem {
    private string $name;
    // 説明
    private string $description;

    private float $price;

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public static function getCategory() {
        // todo: 何を行う関数？

    }


}
