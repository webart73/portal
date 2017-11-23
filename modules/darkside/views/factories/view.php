<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Factories */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Factories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'factory_title',
            'factory_desc:ntext',
            'factory_address',
            'factory_region',
            'factory_country',
            'factory_website',
            'factory_email:email',
            'factory_logo',
            'website100',
            'compare',
        ],
    ]) ?>

</div>
