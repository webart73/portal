<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Factories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'factory_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factory_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website100')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compare')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
