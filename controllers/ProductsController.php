<?php

namespace app\controllers;

use Yii;
use app\models\Products;

class ProductsController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $product = Products::findOne($id);
        $product = Products::findOne(['id' => $id, 'showProduct' => 1]);
        return $this->render('view', compact('product'));
    }
}

