<?php

namespace app\modules\darkside\controllers;

/**
 * Default controller for the `darkside` module
 */
class DefaultController extends AppDarksideController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
