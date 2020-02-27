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

    /*
     * Перенапрвляет URL по коректному маршруту
     * @param string $url входящий URL
     * @return void
     */
    public static function marchRoute($url)
    {

        foreach (self::$routes as $pattern => $route) {

            foreach (self::$routes as $pattern => $route) {
                if ($url == $pattern) {
                    self::$route = $route;
                    return true;

                }


            }
        }
        return false;

    }

}
