<?php

namespace FoodItems;

abstract class FoodItem {
    private string $name;
    private string $description;
    private float $price;

    public function __construct($name, $description, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * name getter
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * description getter
     *
     * @return string
     */
    public function getDescription() :string{
        return $this->description;
    }

    /**
     * price getter
     *
     * @return float
     */
    public function getPrice() :float{
        return $this->price;
    }

}
