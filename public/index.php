<?php

$query = rtrim($_SERVER['QUERY_STRING'], '/');

error_reporting(-1);

define('CONTROL', 'app\controllers\main');
define('ROOT', dirname(__DIR__));

require '../vendor/core/Router.php';
require '../vendor/libs/function.php';
require '../app/controllers/main/Site.php';

spl_autoload_register(function (){
    $file = '';
});



Router::add('^$', ['controller' => 'site', 'action' => 'index']);
Router::add('(?P<controller>[a-z-)+)/(?P<action>(a-z)+)');

debug(Router::getRoutes());

Router::dispatch($query);