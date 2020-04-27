<?php


namespace app\controllers;

use ishop\base\Controller;

class MainController extends AppController
{
//    public $layout = 'test';

    public function indexAction()
    {
        $this->layout = 'default';
//        echo __METHOD__;
    }
}