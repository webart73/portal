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

    <?= $form->field($model, 'factoryTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factoryDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'factoryAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factoryRegion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factoryCountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factoryWebsite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factoryLogo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factoryType')->textInput() ?>

    <?= $form->field($model, 'factoryHits')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factoryRating')->textInput() ?>

    <?= $form->field($model, 'bannerTop')->textInput() ?>

    <?= $form->field($model, 'bannerMain')->textInput() ?>

    <?= $form->field($model, 'bannerCategory')->textInput() ?>

    <?= $form->field($model, 'bannerRegion')->textInput() ?>

    <?= $form->field($model, 'factoryShow')->textInput() ?>

    <?= $form->field($model, 'compare')->textInput() ?>

    <?= $form->field($model, 'website100')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
