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
        $from = Yii::$app->request->get('from');
        $product = Products::findOne(['id' => $id, 'showProduct' => 1]);
        $factory = $product->factory;
        if ('category' == $from) {
            $this->view->params['breadcrumbs'][] = [
                'label' => $product->category['categoryTitle'],
                'url' => [Url::previous()]
            ];
        } else {
            $this->view->params['breadcrumbs'][] = [
                'label' => 'Регионы',
                'url' => ['/regions/']
            ];

            $this->view->params['breadcrumbs'][] = [
                'label' => $factory->region->regions->regionTitle,
                'url' => ['/region/' . $factory->region->regions->id]
            ];

            $this->view->params['breadcrumbs'][] = [
                'label' => $factory->region->regionTitle,
                'url' => ['/town/' . $factory->region->id]
            ];

            $this->view->params['breadcrumbs'][] = [
                'label' => $factory->factoryTitle,
                'url' => [Url::previous()]
            ];
        }

        return $this->render('view', compact('product', 'factory'));
    }
}

