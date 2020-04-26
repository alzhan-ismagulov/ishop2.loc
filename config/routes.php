<?php

use ishop\Router;

//default routes for admin
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

//default routes for page
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
// ^ - начало строки, $ - конец строки. Если между ними ничего нет, то это главная страница
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$' );
