<?php

$router = new Framework\Router;
/*  Artists  */

// Отображение
$router->add("/artists", ["controller" => "artists", "action" => "index", "method" => "get"]);
$router->add("/artists/{id}/show", ["controller" => "artists", "action" => "show", "method" => "get"]);

// Создание
$router->add("/artists/new", ["controller" => "artists", "action" => "new", "method" => "get"]);
$router->add("/artists/create", ["controller" => "artists", "action" => "create", "method" => "post"]);

// Удаление
$router->add("/artists/{id}/delete", ["controller" => "artists", "action" => "delete", "method" => "get"]);
$router->add("/artists/{id}/destroy", ["controller" => "artists", "action" => "destroy", "method" => "post"]);

// Редактирование 
$router->add("/artists/{id}/edit", ["controller" => "artists", "action" => "edit", "method" => "get"]);
$router->add("/artists/{id}/update", ["controller" => "artists", "action" => "update", "method" => "post"]);



/*  Reservations  */

// Отображение
$router->add("/reservations", ["controller" => "reservations", "action" => "index", "method" => "get"]);
$router->add("/reservations/{id}/show", ["controller" => "reservations", "action" => "show", "method" => "get"]);

// Создание
$router->add("/reservations/new", ["controller" => "reservations", "action" => "new", "method" => "get"]);
$router->add("/reservations/create", ["controller" => "reservations", "action" => "create", "method" => "post"]);

// Удаление
$router->add("/reservations/{id}/delete", ["controller" => "reservations", "action" => "delete", "method" => "get"]);
$router->add("/reservations/{id}/destroy", ["controller" => "reservations", "action" => "destroy", "method" => "post"]);

// Редактирование 
$router->add("/reservations/{id}/edit", ["controller" => "reservations", "action" => "edit", "method" => "get"]);
$router->add("/reservations/{id}/update", ["controller" => "reservations", "action" => "update", "method" => "post"]);


/* Users */

$router->add("/user/regform", ["controller" => "users", "action" => "registerForm", "method" => "get"]);
$router->add("/user/reg", ["controller" => "users", "action" => "register", "method" => "post"]);


// $router->add("/user/login", ["controller" => "users", "action" => "loginForm", "method" => "get"]);
// $router->add("/user/login", ["controller" => "users", "action" => "login", "method" => "post"]);
// $router->add("/user/logout", ["controller" => "users", "action" => "logout", "method" => "get"]);

return $router;
