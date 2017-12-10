<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = $tree[$id]['regionTitle'] . '. Мебельные фабрики | ' . Yii::$app->name;

?>

<h1><?= $tree[$id]['regionTitle']?></h1>
<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <?php foreach ($tree as $item) : ?>
            <?php if (0 != $item['value']) : ?>
                <h4>
                    <?= $item['regionTitle'] . ' [' . $item['value'] . ']'; ?>
                </h4>
                <div class="row">
                    <?php if (isset($item['childs'])) : ?>
                        <?php foreach ($item['childs'] as $child) : ?>
                            <?php if (0 != $child['value']) : ?>
                                <div class="col-sm-3">
                                    <a href="<?= Url::to(['regions/town', 'id' => $child['id']]) ?>"><?= $child['regionTitle'] . ' [' . $child['value'] . ']'; ?></a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <hr>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php foreach ($tree[$id]['childs'] as $town) : ?>
            <?php foreach ($town['factories'] as $item) : ?>
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
        <?php endforeach; ?>
    </div>




