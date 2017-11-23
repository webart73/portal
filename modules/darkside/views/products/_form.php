<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'factory_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link100')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
