<?php

namespace app\components;

use yii\base\Widget;
use app\models\Categories;
use Yii;

class MenuWidget extends Widget
{
    public $tpl;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;


    public function init()
    {
        parent::init();
        if (null === $this->tpl) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        if ($this->tpl == 'menu.php') {
            $menu = Yii::$app->cache->get('menu');
            if ($menu) {
                return $menu;
            }
        }
        $this->data = Categories::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        if ($this->tpl == 'menu.php') {
            Yii::$app->cache->set('menu', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    }

    protected function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parentId'])
                $tree[$id] =& $node;
            else
                $this->data[$node['parentId']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '')
    {
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->categoryToTemplate($category, $tab);
        }
        return $str;
    }

    protected function categoryToTemplate($category, $tab)
    {
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}