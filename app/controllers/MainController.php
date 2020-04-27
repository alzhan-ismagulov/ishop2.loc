<?php


namespace app\controllers;

use ishop\base\Controller;

class MainController extends AppController
{

    public function indexAction()
    {
        $this->layout = 'default';
    }
}