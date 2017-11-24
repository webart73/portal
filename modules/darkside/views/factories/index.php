<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\darkside\models\FactoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Factories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Factories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'user_id',
            'factory_title',
            //'factory_desc:ntext',
            'factory_address',
            'factory_region',
            // 'factory_country',
            'factory_website:url',
            'factory_email:email',
            'factory_logo',
            // 'website100',
            // 'compare',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
