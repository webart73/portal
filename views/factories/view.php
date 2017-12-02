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
                <?php foreach ($products as $product) : ?>
                    <div class="col-sm-3">
                        <h4><?= $product->productTitle; ?></h4>
                        <?= Html::img("@web/{$product->productImage}", ['class' => 'img-thumbnail', 'alt' => $product->productTitle]); ?>
                    </div>
                    <?php if (!($i % 4)) : ?>
                        <div class="clearfix"></div>
                    <?php endif;
                    $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
