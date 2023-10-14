<?php

namespace Invoices;

use Other\Timestamp;


class Invoice {
    private float $finalPrice;

    private Timestamp $orderTime;

    private int $estimatedTimeInMinutes;

    public function __construct(Timestamp $timestamp) {
        $this->orderTime = $timestamp;
        $this->finalPrice = 0.0;
        $this->estimatedTimeInMinutes = 0;
    }

    /**
     * estimatedTimeInMinutesに時間を追加
     *
     * @param integer $estimatedTimeInMinutes
     * @return void
     */
    public function addEstimatedTimeInMinutes(int $estimatedTimeInMinutes) :void{
        $this->estimatedTimeInMinutes += $estimatedTimeInMinutes;
    }

    /**
     * Invoiceの内容をprint
     *
     * @return void
     */
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

    /**
     * finalPrice getter
     *
     * @return float
     */
    public function getFinalPrice() : float{
        return $this->finalPrice;
    }

    /**
     * orderTime getter
     *
     * @return string
     */
    public function getOrderTime(): string {
        return $this->orderTime->getTime();
    }


    /**
     * finalPriceにpriceを追加
     *
     * @param float $price
     * @return void
     */
    public function addPrice(float $price) :void{
        $this->finalPrice += $price;
    }
}