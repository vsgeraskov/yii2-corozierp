<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HelpArticle */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Раздел помощи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="help-article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p style="opacity: 0.5; font-size: 9pt; font-style: italic;">Последнее обновление
        <?php //Преобразование в понятный формат
        $dateupdateuser = new DateTime();
        $dateupdateuser->setTimestamp($model->date);
        echo $dateupdateuser->format("d.m.Y в H:i");
        ?>
    </p>
    <br>
    <br>

    <p style="font-size: 14pt;">
    <?= Yii::$app->formatter->asHtml($model->content, ['HTML.SafeIframe' => true]) ?>
    </p>
</div>
