<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 17.11.2017
 * Time: 15:39
 */

namespace app\modules\darkside\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;

class AppDarksideController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

}