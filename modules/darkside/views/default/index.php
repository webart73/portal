<div class="darkside-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
    <h2>Dark Side!!!</h2>
    <hr>
    <ul class="nav navbar-nav">
        <li><?=\yii\helpers\Html::a('Пользователи',['./users'])?>
        <li><?=\yii\helpers\Html::a('Фабрики',['./factories'])?>
        <li><?=\yii\helpers\Html::a('Телефоны',['./phones'])?>
        <li><?=\yii\helpers\Html::a('Изделия',['./products'])?>
        <li><?=\yii\helpers\Html::a('Регионы',['./regions'])?>
    </ul>
    </p>
</div>
