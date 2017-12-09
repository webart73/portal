<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\darkside\models\FactoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Factories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factories-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Factories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
//        'emails' => $emails,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'user_id',
            'factoryTitle',
            //'factoryDesc:ntext',
//            [
//                'attribute' => 'factoryRegion',
//                'value' => function ($data) {
//                    $region = '/';
//                    if (NULL !== $data->region) {
//                        $region = $data->region->regionTitle;
//                    };
//                    return $region;
//                },
//            ],
            'factoryAddress',
            // 'factoryRegion',
            // 'factoryCountry',
             'factoryWebsite:url',
//            [
//                'attribute' => 'factoryEmail',
//                'value' => function ($email) {
//                    $email = '/';
//                    if (NULL !== $data->region) {
//                        $region = $data->region->regionTitle;
//                    };
//                    return $region;
//                },
//            ],
            // 'factoryLogo',
            [
                'label' => 'Логотип',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img(Url::toRoute(  "@web/$data->factoryLogo"), [
                        'alt' => $data->factoryTitle,
                        'style' => 'width:100px;'
                    ]);
                },
            ],
            // 'factoryType',
            // 'factoryHits',
            // 'factoryRating',
            // 'bannerTop',
            // 'bannerMain',
            // 'bannerCategory',
            // 'bannerRegion',
            // 'factoryShow',
            // 'compare',
            // 'website100',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
