<?php

define("DEBUG", 1); //Режим показа ошибок
define("ROOT", dirname(__DIR__)); //Корень сайта
define("WWW", ROOT . '/public'); //Указывает на папку public
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default'); // Шаблон

// http://ishop2.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}"; //
// http://ishop2.loc/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);// Отрезали из адреса index.php
// http://ishop2.loc
$app_path = str_replace('/public/', '', $app_path); //Получили url главной страницы
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php'; //Подключение загрузчика