<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Products */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

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
            'factoryId',
            'productTitle',
            'productDesc:ntext',
            //'productImage',
            [
                'label' => 'Изображение',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::img(Url::toRoute(  "@web/$data->productImage"), [
                        'alt' => $data->productTitle,
                        'style' => 'width:300px;'
                    ]);
                },
            ],
            'showProduct',
            'link100',
        ],
    ]) ?>

</div>
