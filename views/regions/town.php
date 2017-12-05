<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $tree[$id]['regionTitle'] . '. Мебельные фабрики | ' . Yii::$app->name;

?>

<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <h1><?= $tree[$id]['regionTitle'] ?></h1>
        <?php foreach ($tree[$id]['factories'] as $item) : ?>
            <div class="row">
                <div class="col-xs-12">
                    <h2>
                        <a href="<?= Url::to(['factories/view', 'id' => $item['id']]) ?>"><?= $item['factoryTitle']; ?></a>
                    </h2>
                </div>
                <div class="col-sm-3">
                    <a href="<?= Url::to(['factories/view', 'id' => $item['id']]) ?>"><?= Html::img("@web/{$item['factoryLogo']}", ['class' => 'img-thumbnail', 'alt' => $item['factoryTitle']]); ?></a>
                </div>
                <div class="col-sm-9">
                    <div>
                        <?= $item['factoryDesc']; ?>
                        <hr>
                    </div>
                    <div>
                        <?= $item['factoryAddress']; ?>
                    </div>
                </div>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
</div>
