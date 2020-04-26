<?php


namespace ishop;


class Router
{
    protected static $routes = []; //Таблица маршрутов
    protected static $route = []; //Текущий маршрут

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

    public static function dispatch($url) //Метод перенаправялет запрос, если метод matchRoute нашёл
    {
        if (self::matchRoute($url)){
            echo'OK';
        } else {
            echo'NO';
        }
    }

    public static function matchRoute($url) //Метод ищет соответствие маршрута
    {
        return false;
    }
}