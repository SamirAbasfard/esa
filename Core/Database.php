<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$Capsule = new Capsule();


$Capsule->addConnection([
    'driver'=>'mysql',
    'host'=> \App\Config::DB_HOST,
    'database'=>\App\Config::DB_NAME,
    'username'=>\App\Config::DB_USER,
    'password'=>\App\Config::DB_PASS,
    'charset'=>'utf8',
    'collation'=>'utf8_general_ci'

]);
$Capsule->bootEloquent();
