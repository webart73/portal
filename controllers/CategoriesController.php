<?php

namespace app\controllers;

use Yii;
use app\models\Categories;

class CategoriesController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $category = Categories::findOne($id);
        $products = $category->products;
        return $this->render('view', compact('category', 'products'));
    }

}
