<?php

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
            </div>
            <div class="col-lg-9">
                <?php if (!empty($bannerMain)) : ?>
                    <?php foreach ($bannerMain as $item) : ?>
                        <div class="row">
                            <div class="col-xs-12">
                            <h2>
                                <?= Html::a($item->factoryTitle,['factories/view','id' => $item->id]) ?>
                            </h2>
                            </div>
                            <div class="col-sm-3">
                                <?= Html::a(Html::img("@web/{$item->factoryLogo}", ['class' => 'img-thumbnail', 'alt' => $item->factoryTitle]),['factories/view','id' => $item->id]) ?>
                            </div>
                            <div class="col-sm-9">
                                <div>
                                    <?= $item->factoryDesc; ?>
                                    <hr>
                                </div>
                                <div>
                                    <?= $item->factoryAddress; ?>
                                </div>
                            </div>
                            <hr>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
