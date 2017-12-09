<?php

use yii\helpers\Url;
use yii\helpers\Html;

//$this->title = $category->title . ' | ' . Yii::$app->name;

?>

<h1>regions/index</h1>
<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
<!--        --><?php //debug($products) ?>
        <?php if (!empty($products)) : ?>
            <?php $i = 1 ?>
            <!--                --><?php //debug($products);
//                die; ?>
            <?php foreach ($products['products'] as $product) : ?>
                <div class="col-sm-3">
                    <h4>
                        <!--                            --><?php //debug($product);
                        //                            die; ?>
                        <a href="<?= Url::to(['products/view', 'id' => $product->id]) ?>"><?= $product->productTitle; ?></a>
                    </h4>
                    <a href="<?= Url::to(['products/view', 'id' => $product->id]) ?>"><?= Html::img("@web/{$product->productImage}", ['class' => 'img-thumbnail', 'alt' => $product->productTitle]); ?></a>
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