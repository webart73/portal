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

    <?= $form->field($model, 'factory_title') ?>

    <?= $form->field($model, 'factory_desc') ?>

    <?= $form->field($model, 'factory_address') ?>

    <?php // echo $form->field($model, 'factory_region') ?>

    <?php // echo $form->field($model, 'factory_country') ?>

    <?php // echo $form->field($model, 'factory_website') ?>

    <?php // echo $form->field($model, 'factory_email') ?>

    <?php // echo $form->field($model, 'factory_logo') ?>

    <?php // echo $form->field($model, 'website100') ?>

    <?php // echo $form->field($model, 'compare') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
