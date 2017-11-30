<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\FactoriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'factoryTitle') ?>

    <?= $form->field($model, 'factoryDesc') ?>

    <?= $form->field($model, 'factoryAddress') ?>

    <?php // echo $form->field($model, 'factoryRegion') ?>

    <?php // echo $form->field($model, 'factoryCountry') ?>

    <?php // echo $form->field($model, 'factoryWebsite') ?>

    <?php // echo $form->field($model, 'factoryLogo') ?>

    <?php // echo $form->field($model, 'factoryType') ?>

    <?php // echo $form->field($model, 'factoryHits') ?>

    <?php // echo $form->field($model, 'factoryRating') ?>

    <?php // echo $form->field($model, 'bannerTop') ?>

    <?php // echo $form->field($model, 'bannerMain') ?>

    <?php // echo $form->field($model, 'bannerCategory') ?>

    <?php // echo $form->field($model, 'bannerRegion') ?>

    <?php // echo $form->field($model, 'factoryShow') ?>

    <?php // echo $form->field($model, 'compare') ?>

    <?php // echo $form->field($model, 'website100') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
