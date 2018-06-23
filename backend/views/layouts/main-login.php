<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);

/* Подключение прогрессбара */
use phpnt\pace\PaceAsset;
PaceAsset::register($this);

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
<body class="login-page" style="background-image: url('../img/loginfon.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; ">

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
