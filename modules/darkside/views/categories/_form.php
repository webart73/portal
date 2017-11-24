<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_title')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-categories-parent_id required has-success">
        <label class="control-label" for="categories-parent_id">Parent ID</label>
        <select id="categories-parent_id" class="form-control" name="Categories[parent_id]" aria-required="true" aria-invalid="false">
            <option value="0">/</option>
            <?= \app\components\MenuWidget::widget(['tpl'=>'select', 'model'=>$model])?>
        </select>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
