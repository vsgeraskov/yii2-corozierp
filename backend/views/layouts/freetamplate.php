<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 17.06.18
 * Time: 20:20
 */
/* Пустой шаблон страницы для вывода различной информации которая в последствии на печать уходит */

use yii\helpers\Html;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="freetamplate-page">

<?php $this->beginBody() ?>

<!--Прогрессбар загрузки страницы-->
<div class="pace pace-inactive" style="width: 100%;">
    <div class="pace-progress" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>