<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoryTitle')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-categories-parent_id required has-success">
        <label class="control-label" for="categories-parentId">Parent ID</label>
        <select id="categories-parentId" class="form-control" name="Categories[parentId]" aria-required="true" aria-invalid="false">
            <option value="0">/</option>
            <?= \app\components\MenuWidget::widget(['tpl'=>'select', 'model'=>$model])?>
        </select>
    </div>

    <?= $form->field($model, 'categoryDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'categoryImage')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
