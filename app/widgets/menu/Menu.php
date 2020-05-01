<?php

namespace app\widgets\menu;

use ishop\App;
use ishop\Cache;

class Menu
{
    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl; /** здесь храниться шаблон для меню */
    protected $container;
    protected $table = 'category';/** таблица в базе данных из которых выбираются данные $data */
    protected $cache = 3600;/** на какое время кэшировать данные */
    protected $cacheKey = 'ishop_menu';/** ключ под которым будуи сохраняться данные кэша */
    protected $attrs = []; /** массив аттрибутов меню */
    protected $prepend = '';

    public function __construct($options = [])
    {
        $this->tpl = __DIR__ . '/menu_tpl/menu.php';
        $this->getOptions($options);
        debug($this->table);
        $this->run();
    }

    protected function getOptions($options)
    {
        foreach ($options as $k => $v)
        {
            if (property_exists($this, $k))
            {
                $this->$k = $v;
            }
        }
    }

    protected function run()
    {
        $cache = Cache::instance();
        $this->menuHtml = $cache->get($this->cacheKey);
        if (!$this->menuHtml)
        {
            $this->data = App::$app->setProperty('cats');
            if(!$this->data)
            {
                $this->data = $cats = \R::getAssoc("SELECT * FROM {$this->table}");
            }

        }
        $this->output();
    }

    /** вывод меню */
    protected function output()
    {
        echo $this->menuHtml;
    }

    /** методо получающий дерево меню из ассоциативного массива */
    protected function getTree()
    {

    }

    protected function getMenuHtml($tree, $tab = '')
    {

    }

    protected function catToTemplate($category, $tab, $id)
    {

    }
}