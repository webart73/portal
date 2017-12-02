<?php

namespace app\controllers;

use Yii;
use app\models\Factories;

class FactoriesController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $factory = Factories::findOne($id);
        $contacts = $factory->contacts;
        $products = $factory->products;
        return $this->render('view', compact('factory', 'contacts', 'products'));
    }
}
