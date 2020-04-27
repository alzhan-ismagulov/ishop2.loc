<?php


namespace app\controllers;

use ishop\base\Controller;

class MainController extends AppController
{

    public function indexAction()
    {
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $name = 'Andrey';
        $age = 30;
        $names = ['Andrey' , 'Jane'];
        $this->set(compact('name', 'age', 'names'));
    }
}