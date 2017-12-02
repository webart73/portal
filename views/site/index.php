<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-3">
                <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
            </div>
            <div class="col-lg-9">
                <?php if (!empty($bannerMain)) : ?>
                    <?php foreach ($bannerMain as $item) : ?>
                        <div class="row">
                            <h2>
                                <a href="<?= Url::to(['factories/view', 'id' => $item->id]) ?>"><?= $item->id . ' ' . $item->factoryTitle; ?></a>
                            </h2>
                            <div class="col-sm-3">
                                <a href="<?= Url::to(['factories/view', 'id' => $item->id]) ?>"><?= Html::img("@web/{$item->factoryLogo}", ['class' => 'img-thumbnail', 'alt' => $item->factoryTitle]); ?></a>
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
