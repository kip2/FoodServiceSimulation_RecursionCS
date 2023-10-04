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

    public function addPrice(float $price) {
        $this->finalPrice += $price;
    }

    public function addEstimatedTimeInMinutes(int $estimatedTimeInMinutes) {
        $this->estimatedTimeInMinutes += $estimatedTimeInMinutes;
    }
}