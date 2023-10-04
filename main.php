<?php

// autoloader機能
// 未定義のクラスが呼ばれたら、そのクラスが定義されているファイルを自動的に読み込む仕組み
spl_autoload_extensions(".php");
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/src/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

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

// --------------------------------------------------

$cheeseBurger = new CheeseBurger();
$fettuccine = new Fettuccine();
$hawaiianPizza = new HawaiianPizza();
$spaghetti = new Spaghetti();

echo $cheeseBurger;
echo $fettuccine;
echo $hawaiianPizza;
echo $spaghetti;

// employee test
$Inavah = new Chef("Inayah Lozano", 40, "Osaka", 1, 30);
$Nadia = new Cashier("Nadia Valentine", 21, "Tokyo", 1, 20);


// restaurant
$menu = [
    $cheeseBurger,
    $fettuccine,
    $hawaiianPizza,
    $spaghetti
];

$employees = [
    $Inavah,
    $Nadia
];

$saizeriya = new Restaurant($menu, $employees);

echo "hello";