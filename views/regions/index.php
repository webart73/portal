<?php

use yii\helpers\Url;

?>

<h1>regions/index</h1>
<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <?php //debug($tree);?>
        <?php foreach ($tree as $item) : ?>
            <?php if (0 != $item['value']) : ?>
                <h4>
                    <a href="<?= Url::to(['regions/region', 'id' => $item['id']]) ?>"><?= $item['regionTitle'] . ' [' . $item['value'] . ']'; ?></a>
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
    </div>




