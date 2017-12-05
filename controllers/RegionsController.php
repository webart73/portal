<?php

namespace app\controllers;

use app\models\Regions;
use Yii;

class RegionsController extends AppController
{
    public function actionIndex()
    {
        $tree = Regions::getTree();
        return $this->render('index', compact('tree'));
    }

    public function actionRegion()
    {
        $id = Yii::$app->request->get('id');
        $tree = Regions::getTree($id);
        return $this->render('region', compact('tree','id'));
    }

    public function actionTown()
    {
        $id = Yii::$app->request->get('id');
        $tree = Regions::getTree($id);
        return $this->render('town', compact('tree','id'));
    }

}
