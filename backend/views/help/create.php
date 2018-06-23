<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HelpArticle */

$this->title = 'Новая статья';
$this->params['breadcrumbs'][] = ['label' => 'Раздел помощи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Список статей', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="help-article-create">

    <h1>Создать статью раздела помощь</h1>
    <p> В данном разделе Вы можете создать новую статью раздела помощь, это поможет новым и уже существующим пользователям
    более эффективно использовать наш программный комплекс. Для разделения статей по категориям используется следующая нумерация</p>
    <p>
        1 - Основной раздел<br>
        2 - Трудовая деятельность<br>
        3 - Бухгалтерские вопросы<br>
        4 - Производственные вопросы <br>
    </p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
