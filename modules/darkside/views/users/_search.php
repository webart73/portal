<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'userGroup') ?>

    <?= $form->field($model, 'userName') ?>

    <?= $form->field($model, 'login') ?>

    <?= $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'userPhone') ?>

    <?php // echo $form->field($model, 'userEmail') ?>

    <?php // echo $form->field($model, 'activation') ?>

    <?php // echo $form->field($model, 'block') ?>

    <?php // echo $form->field($model, 'registerDate') ?>

    <?php // echo $form->field($model, 'lastvisitDate') ?>

    <?php // echo $form->field($model, 'authKey') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
