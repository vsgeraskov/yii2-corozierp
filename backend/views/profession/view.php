<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profession */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Professions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id_prof], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_prof], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить данную профессию?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_prof',
            'name',
            'code',
        ],
    ]) ?>

</div>
