<?php

use vendor\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/');

error_reporting(-1);

define('CONTROL', 'app\controllers\main');
define('CORE', dirname(__DIR__), 'vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', '\app\controllers\main\\');

require '../vendor/libs/function.php';

spl_autoload_register(function ($class){
    $file = ROOT.'/'.str_replace('\\', '/', $class.'.php');
    if (is_file($file)) {
        require_once $file;
    }
});



//Default routs
Router::add('^$', ['controller' => 'site', 'action' => 'index']);
Router::add('(?P<controller>[a-z-)+)/(?P<action>(a-z)+)');

debug(Router::getRoutes());

Router::dispatch($query);