<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'factoryId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'productTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'productDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'productImage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'showProduct')->textInput() ?>

    <?= $form->field($model, 'link100')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
