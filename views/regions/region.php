<?php

use yii\helpers\Html;

$this->title = $tree[$id]['regionTitle'] . '. Мебельные фабрики | ' . Yii::$app->name;

?>

<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <?= \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <h1><?= $tree[$id]['regionTitle'] . ' [' . $tree[$id]['value'] . ']'; ?></h1>
        <?php if (0 != $tree[$id]['value']) : ?>
            <div class="row">
                <?php if (isset($tree[$id]['childs'])) : ?>
                    <?php foreach ($tree[$id]['childs'] as $child) : ?>
                        <?php if (0 != $child['value']) : ?>
                            <div class="col-sm-3">
                                <?= Html::a($child['regionTitle'] . ' [' . $child['value'] . ']', ['regions/town', 'id' => $child['id']]) ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <hr>
        <?php endif; ?>
        <?php foreach ($tree[$id]['childs'] as $town) : ?>
            <?php foreach ($town['factories'] as $item) : ?>
                <div class="row">
                    <div class="col-xs-12">
                        <h2>
                            <?= Html::a($item['factoryTitle'], ['factories/view', 'id' => $item['id']]) ?>
                        </h2>
                    </div>
                    <div class="col-sm-3">
                        <?= Html::a(Html::img("@web/{$item['factoryLogo']}", ['class' => 'img-thumbnail', 'alt' => $item['factoryTitle']]), ['factories/view', 'id' => $item['id']]) ?>
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




