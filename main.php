<?php

// autoloader機能
// 未定義のクラスが呼ばれたら、そのクラスが定義されているファイルを自動的に読み込む仕組み
// spl_autoload_extensions(".php");
// spl_autoload_register(function ($class) {
//     $base_dir = __DIR__ . '/src/';
//     $file = $base_dir . str_replace('\\', '/', $class) . '.php';
//     if (file_exists($file)) {
//         require_once $file;
//     }
// });

// food items
require_once 'src/FoodItems/CheeseBurger.php';
require_once 'src/FoodItems/Fettuccine.php';
require_once 'src/FoodItems/HawaiianPizza.php';
require_once 'src/FoodItems/Spaghetti.php';

// employee
// require_once 'src/Persons/Person.php';
// require_once 'src/Persons/Employees/Employee.php';
require_once 'src/Persons/Employees/Cashier.php';
require_once 'src/Persons/Employees/Chef.php';
require_once 'src/Restaurants/Restaurant.php';
require_once 'src/Persons/Customers/Customer.php';

// timestamp
require_once 'src/Other/Timestamp.php';

// --------------------------------------------------

// タイムゾーン設定
date_default_timezone_set("Asia/Tokyo");

// --------------------------------------------------

// employee test

// restaurant
$menu = [
    new CheeseBurger(),
    new Fettuccine(),
    new HawaiianPizza(),
    new Spaghetti()
];

$employees = [
    new Chef("Inayah Lozano", 40, "Osaka", 1, 30),
    new Cashier("Nadia Valentine", 21, "Tokyo", 1, 20)
];

$saizeriya = new Restaurant($menu, $employees);
// echo $saizeriya->introduction();

$interestedTastesMap = [
    "Margherita" => 1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1,
];

$Tom = new Customer("Tom", 20, "Saitama", $interestedTastesMap);

echo $Tom->introduction();


// $Tom->interestedCategories($saizeriya);
echo "test";

// $invoice = $Tom->order($saizeriya);
// $invoice->printInvoice();

// timestamp

// $timestamp = new Timestamp();

// echo $timestamp;
// echo "\n";
// echo $timestamp->getElapsedTime(time());
// echo $timestamp->getTime();
// echo "\n";

// sleep(5);

// echo date("i:s", ($timestamp->getElapsedTime(time())));
// echo (string)$timestamp->getElapsedTime(time());