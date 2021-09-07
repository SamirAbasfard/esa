<?php

$router = new  \Core\Router() ;

$router->add("/", "HomeController@index");
$router->add("/student/delete", "HomeController@studentdelete");
$router->add("/student/edit", "HomeController@studentedit");
$router->add("/student/add", "HomeController@studentadd");


$router->add("/Teachers", "MyController@Teachers");
$router->add("/teachers/delete", "MyController@teacherdelete");
$router->add("/teachers/edit", "MyController@teacheredit");
$router->add("/teachers/add", "MyController@teacheradd");

$router->add("/Days", "MyController@Days");
$router->add("/Days/{Setting}", "MyController@Days2");

$router->add("/Years", "MyController@Years");
$router->add("/Years/{Setting}", "MyController@Years2");

$router->add("/Room", "MyController@Room");
$router->add("/Room/{Setting}", "MyController@Room2");

$router->add("/login", "MyController@login");




return $router;