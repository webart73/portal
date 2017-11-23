<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\darkside\models\PhonesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'factory_id',
            'factory_phone',
            'phone_desc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
