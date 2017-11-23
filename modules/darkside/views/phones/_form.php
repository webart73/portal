<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Phones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'factory_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_desc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
