<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\darkside\models\Factories */

$this->title = 'Create Factories';
$this->params['breadcrumbs'][] = ['label' => 'Factories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
