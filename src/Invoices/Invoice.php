<?php

require_once __DIR__ . '/../Other/Timestamp.php';

class Invoice {
    private float $finalPrice;

    private Timestamp $orderTime;

    private int $estimatedTimeInMinutes;

    public function __construct(Timestamp $timestamp) {
        $this->orderTime = $timestamp;
        $this->finalPrice = 0.0;
        $this->estimatedTimeInMinutes = 0;
    }

    public function getFinalPrice() {
        return $this->finalPrice;
    }

    public function getOrderTime() {
        return $this->orderTime->getTime();
    }

    public function addPrice(float $price) {
        $this->finalPrice += $price;
    }

    public function addEstimatedTimeInMinutes(int $estimatedTimeInMinutes) {
        $this->estimatedTimeInMinutes += $estimatedTimeInMinutes;
    }

    public function printInvoice() : void{
        $date = $this->getOrderTime();
        $price = $this->getFinalPrice();
        $hr = "--------------------------------------------------\n";

        printf("%sDate: {%s}\nFinal Price: %s\n%s ",
                $hr,
                $date,
                number_format($price, 2),
                $hr);
    }
}