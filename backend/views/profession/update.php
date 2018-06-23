<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profession */

$this->title = 'Обновление профессии: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Список профессий', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_prof]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="profession-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Обновление профессии</p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
