<?php

namespace app\controllers;

use app\models\Regions;

class RegionsController extends AppController
{
    public function actionIndex()
    {
        $tree = Regions::getTree();
        return $this->render('index', compact('tree'));
    }

}
