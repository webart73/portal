<?php

namespace app\controllers;

use app\models\Regions;
use Yii;
use yii\helpers\Url;

class RegionsController extends AppController
{
    public function actionIndex()
    {
        $this->view->params['breadcrumbs'][] = [
            'label' => '',
        ];
        $tree = Regions::getTree();
        return $this->render('index', compact('tree'));
    }

    public function actionRegion()
    {
        $id = Yii::$app->request->get('id');
        $region = Regions::findOne($id);
        $tree = Regions::getTree($id);

        $this->view->params['breadcrumbs'][] = [
            'label' => 'Регионы',
            'url' => ['/regions/']
        ];

        return $this->render('region', compact('tree', 'id'));
    }

    public function actionTown()
    {
        $id = Yii::$app->request->get('id');
        $town = Regions::findOne($id);
        $tree = Regions::getTree($id);

        $this->view->params['breadcrumbs'][] = [
            'label' => 'Регионы',
            'url' => ['/regions/']
        ];

        $this->view->params['breadcrumbs'][] = [
            'label' => $town->regions->regionTitle,
            'url' => ['/region/'.$town->regions->id]
        ];

        return $this->render('town', compact('tree', 'id'));
    }

}
