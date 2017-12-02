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
        $phones = $factory->getContacts(1)->all();
        $emails = $factory->getContacts(2)->all();
        $products = $factory->products;
        return $this->render('view', compact('factory', 'phones', 'emails', 'products'));
    }
}
