<?php
// autoloader機能
// 未定義のクラスが呼ばれたら、そのクラスが定義されているファイルを自動的に読み込む仕組み
// spl_autoload_extensions(".php");
// spl_autoload_register(function ($class) {
//     $base_dir = __DIR__ . '/src/';
//     $file = $base_dir . str_replace('\\', '/', $class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

require 'src/FoodItems/CheeseBurger.php';

// $cheeseBurger = new \FoodItems\CheeseBurger();
$cheeseBurger = new CheeseBurger();

echo $cheeseBurger;