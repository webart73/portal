<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $factory->factoryTitle . ' | ' . Yii::$app->name;

?>


<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <h1><?= $factory->factoryTitle ?></h1>
        <div class="row">
            <div class="col-sm-3">
                <?= Html::img("@web/{$factory->factoryLogo}", ['class' => 'img-thumbnail', 'alt' => $factory->factoryTitle]); ?>
            </div>
            <div class="col-sm-9">
                <div>
                    <?= $factory->factoryDesc; ?>
                    <hr>
                </div>
                <div>
                    <?= $factory->factoryAddress; ?>
                    <hr>
                </div>
                <?php if (!empty($phones)) : ?>
                    <?php foreach ($phones as $phone) : ?>
                        <div>
                            <?= $phone->contactValue; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (!empty($emails)) : ?>
                    <?php foreach ($emails as $email) : ?>
                        <div>
                            <?= $email->contactValue; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <br>
                <br>
            </div>
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
    </div>
</div>
