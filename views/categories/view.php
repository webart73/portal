<?php

use yii\helpers\Html;

$this->title = $category->categoryTitle . ' | ' . Yii::$app->name;

?>

<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <?= \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <h1><?= $category->categoryTitle ?></h1>
        <?php if (!empty($products)) : ?>
            <?php $i = 1 ?>
            <?php foreach ($products['products'] as $product) : ?>
                <div class="col-sm-3">
                    <h4>
                        <?= Html::a($product->productTitle, ['products/view', 'id' => $product->id, 'from' => 'category']) ?>
                    </h4>
                    <?= Html::a(Html::img("@web/{$product->productImage}", ['class' => 'img-thumbnail', 'alt' => $product->productTitle]), ['products/view', 'id' => $product->id, 'from' => 'category']) ?>
                </div>
                <?php if (!($i % 4)) : ?>
                    <div class="clearfix"></div>
                <?php endif;
                $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="clearfix"></div>
        <?= \yii\widgets\LinkPager::widget(['pagination' => $products['pages'],]); ?>
    </div>