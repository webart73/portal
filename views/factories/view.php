<?php

use yii\helpers\Html;

$this->title = $factory->factoryTitle . ' | ' . Yii::$app->name;

$request = Yii::$app->request;

$get = $request->get();

?>


<div class="row">
    <div class="col-lg-3">
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
    </div>
    <div class="col-lg-9">
        <?= \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
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
        </div>
        <div class="row">
            <?php if (isset($get['category'])) : ?>
                <div class="col-sm-3">
                    <h5>
                        <?= Html::a('Все',['factories/view','id' => $factory->id]) ?>
                    </h5>
                </div>
            <?php endif; ?>
            <?php if (!empty($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <div class="col-sm-3">
                        <h5>
                            <?= Html::a($category['categoryTitle'],['factories/view','id' => $factory->id, 'category' => $category['id']]) ?>
                        </h5>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php if (!empty($products)) : ?>
                <?php $i = 1 ?>
                <?php foreach ($products['products'] as $product) : ?>
                    <div class="col-sm-3">
                        <h4>
                            <?= Html::a($product->productTitle,['products/view', 'id' => $product->id]) ?>
                        </h4>
                        <?= Html::a(Html::img("@web/{$product->productImage}", ['class' => 'img-thumbnail', 'alt' => $product->productTitle]),['products/view', 'id' => $product->id]) ?>
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
