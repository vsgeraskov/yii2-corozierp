<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profession */

$this->title = 'Добавить профессию';
$this->params['breadcrumbs'][] = ['label' => 'Список профессий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="profession-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Добавление новой профессии в базу данных.</p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
