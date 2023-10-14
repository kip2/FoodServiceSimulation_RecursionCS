<?php

namespace FoodService;

// 使用するクラスの呼び出し
use FoodItems\CheeseBurger;
use FoodItems\Fettuccine;
use FoodItems\Spaghetti;
use FoodItems\HawaiianPizza;
use Persons\Employees\Chef;
use Persons\Employees\Cashier;
use Restaurants\Restaurant;
use Persons\Customers\Customer;

// --------------------------------------------------

// autoloadの拡張子を指定する
spl_autoload_extensions(".php");
// autoload登録(デフォルトのspl_autoload)
spl_autoload_register();

// タイムゾーン設定
date_default_timezone_set("Asia/Tokyo");

// --------------------------------------------------

// restaurant
$menu = [
    new CheeseBurger(),
    new Fettuccine(),
    new HawaiianPizza(),
    new Spaghetti()
];

// employees
$employees = [
    new Chef("Inayah Lozano", 40, "Osaka", 1, 30),
    new Cashier("Nadia Valentine", 21, "Tokyo", 1, 20)
];

// saizeriya を生成
$saizeriya = new Restaurant($menu, $employees);

// 食べたい料理テーブル
$interestedTastesMap = [
    "Margherita" => 1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1,
];

// Tomを生成
$Tom = new Customer("Tom", 20, "Saitama", $interestedTastesMap);

// order
$invoice = $Tom->order($saizeriya);

// 結果をprint
$invoice->printInvoice();
