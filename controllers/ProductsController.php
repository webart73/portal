<?php

namespace app\controllers;

use Yii;
use app\models\Products;
use yii\helpers\Url;

class ProductsController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $product = Products::findOne(['id' => $id, 'showProduct' => 1]);
        $factory = $product->factory;
//        debug($factory);

        $this->view->params['breadcrumbs'][] = [
            'label' => 'Регионы',
            'url' => ['/regions/']
        ];

        $this->view->params['breadcrumbs'][] = [
            'label' => $factory->region->regions->regionTitle,
            'url' => ['/region/'.$factory->region->regions->id]
        ];

        $this->view->params['breadcrumbs'][] = [
            'label' => $factory->region->regionTitle,
            'url' => ['/town/'.$factory->region->id]
        ];

        $this->view->params['breadcrumbs'][] = [
            'label' => $factory->factoryTitle,
            'url' => ['/factory/'.$factory->id]
        ];

        return $this->render('view', compact('product', 'factory'));
    }
}

