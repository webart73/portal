<?php

namespace app\controllers;

use Yii;
use app\models\Factories;
use yii\helpers\Url;

class FactoriesController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        Url::remember();
        $id = Yii::$app->request->get('id');
        $category = Yii::$app->request->get('category');
        $factory = Factories::findOne($id);
        $phones = $factory->getContacts(1)->all();
        $emails = $factory->getContacts(2)->all();
        $products = $factory->getProducts($category);
        $town = $factory->region;
        $categories = $factory->categories;

        $this->view->params['breadcrumbs'][] = [
            'label' => 'Регионы',
            'url' => ['/regions/']
        ];

        $this->view->params['breadcrumbs'][] = [
            'label' => $town->regions->regionTitle,
            'url' => ['/region/' . $town->regions->id]
        ];
        $this->view->params['breadcrumbs'][] = [
            'label' => $town->regionTitle,
            'url' => ['/town/' . $town->id]
        ];
        return $this->render('view', compact('factory', 'phones', 'emails', 'products', 'categories'));
    }
}
