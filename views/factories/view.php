<?php

use yii\helpers\Html;

$this->title = $factory->factoryTitle . ' | ' . Yii::$app->name;

?>


<div class="row">
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
            <?php if (!empty($contacts)) : ?>
                <?php foreach ($contacts as $contact) : ?>
                    <div>
                        <?= $contact->contactValue; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
