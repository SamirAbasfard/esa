<?php

//if (true) {
//
//    $sit = \App\Config::MY_WEBSITE;
//    header("Location:$sit/login");
//
//    session_start();
//    if ($_SESSION['login'] = "admin") {
//        header("Location:$sit");
//    } else {
//        header("Location:$sit/login");
//    }
//}


require_once "../vendor/autoload.php";
require "../Core/Database.php";

$router = require_once "../App/Router.php";
$url = $_SERVER['QUERY_STRING'];

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

$router->patches($url);





