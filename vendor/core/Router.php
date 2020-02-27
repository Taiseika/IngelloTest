<?php

class Router
{
    protected  static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }


    public static function marchRoute($url)
    {

        foreach (self::$routes as $pattern => $route)
        {
            foreach (self::$routes as $pattern => $route)
            {
                if (preg_match("~$pattern~", $url, $matches)) {
                    debug($matches);
                    foreach ($matches as $k => $v) {
                        if (is_string($route)) {
                            $route[$k] = $v;
                        }
                    }
                    if (!isset($route['action'])) {
                        $route['action'] = 'index';
                    }
                    self::$route = $route;
                    debug(self::$route);
                    return true;

                }
            }
        }
        return false;

    }

    /*
     * Перенапрвляет URL по коректному маршруту
     * @param string $url входящий URL
     * @return void
     */
    public static function dispatch ($url)
    {
        if (self::marchRoute($url)) {
           $controller = self::$route['controller'];
           if (class_exists($controller)) {
               echo 'ok';
           } else {
               echo "Контроллер <b>$controller</b> не найден " . "<br>";
           }


        } else {
            http_response_code(404);
            include '404.html';
        }
    }
}
