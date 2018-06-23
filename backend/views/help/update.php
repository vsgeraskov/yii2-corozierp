<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HelpArticle */

$this->title = 'Update Help Article: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Help Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_articl]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="help-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
