<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HelpArticle */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Help Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="help-article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_articl], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_articl], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_articl',
            'title',
            'content:ntext',
            'date',
            'category',
            'status',
            'user_id',
        ],
    ]) ?>

</div>
