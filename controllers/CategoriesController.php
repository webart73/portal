<?php

namespace app\controllers;

use Yii;
use app\models\Categories;
use yii\helpers\Url;

class CategoriesController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        Url::remember();
        $id = Yii::$app->request->get('id');
        $category = Categories::findOne($id);
        $products = $category->products;

        $this->view->params['breadcrumbs'][] = [
            'label' => '',
        ];

        return $this->render('view', compact('category', 'products'));
    }

}
