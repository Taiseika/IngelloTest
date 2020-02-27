<?php

$query = rtrim($_SERVER['QUERY_STRING'], '/');

error_reporting(-1);

define('CONTROL', 'app\controllers\main');
define('CORE', dirname(__DIR__), 'vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__).'/app');

require '../vendor/core/Router.php';
require '../vendor/libs/function.php';

spl_autoload_register(function ($class){
    $file = APP."/controllers/main/$class.php";
    if (is_file($file)) {
        require_once $file;
    }
});



//Default routs
Router::add('^$', ['controller' => 'site', 'action' => 'index']);
Router::add('(?P<controller>[a-z-)+)/(?P<action>(a-z)+)');

debug(Router::getRoutes());

Router::dispatch($query);