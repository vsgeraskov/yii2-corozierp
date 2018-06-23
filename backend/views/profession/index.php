<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список профессий';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>Список доступных профессий в нашей системе</p>
    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prof',
            'name',
            'code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
