<?php

use yii\helpers\Html;

?>
<h1>Banner Main</h1>

<div>
    <?php if (!empty($bannerMain)) : ?>
        <?php foreach ($bannerMain as $item) : ?>
            <div class="container">
                <div>
                    <?= $item->id . '' . $item->factoryTitle; ?>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <?= Html::img("@web/{$item->factoryLogo}", ['class' => 'img-thumbnail', 'alt' => $item->factoryTitle]); ?>
                    </div>
                    <div class="col-sm-8">
                        <div>
                            <?= $item->factoryDesc; ?>
                            <hr>
                        </div>
                        <div>
                            <?= $item->factoryAddress; ?>
                        </div>

                    </div>
                </div>
                <hr>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
