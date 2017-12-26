<?php

use yii\helpers\Html;

$this->title = $product->productTitle . ' | ' . Yii::$app->name;

?>


<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <?= \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <h1><?= $product->productTitle ?></h1>
        <div class="row">
            <div class="col-xs-12">
                <?= Html::img("@web/{$product->productImage}", ['class' => 'img-thumbnail', 'alt' => $product->productTitle]); ?>
            </div>
            <div class="col-sm-12">
                <div>
                    <?= $product->productDesc; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <?= Html::a(Html::img("@web/{$factory->factoryLogo}", ['class' => 'img-thumbnail', 'alt' => $factory->factoryTitle]), ['factories/view', 'id' => $factory->id]) ?>
                <?= Html::a($factory->factoryTitle, ['factories/view', 'id' => $factory->id]) ?>
            </div>
        </div>
    </div>
</div>