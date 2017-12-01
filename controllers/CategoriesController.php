<?php

namespace app\controllers;

use app\models\Factories;

class CategoriesController extends AppController
{
    public function actionIndex()
    {
        $bannerMain = Factories::find()->where(['bannerMain' => 1])-> all();
        return $this->render('index',compact('bannerMain'));
    }

}