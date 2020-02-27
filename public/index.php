<?php

$query = rtrim($_SERVER['QUERY_STRING'], '/');

error_reporting(-1);


define('CONTROL', 'app\controllers');
define('ROOT', dirname(__DIR__));

require '../vendor/core/Router.php';
require '../vendor/libs/function.php';

Router::add('post/add', ['controller' => 'Posts', 'action' => 'add']);
Router::add('', ['controller' => 'Site', 'action' => 'index']);


if(Router::marchRoute($query)) {
    debug(Router::getRoutes());
} else {
    echo '404';
}

debug(Router::getRoutes());