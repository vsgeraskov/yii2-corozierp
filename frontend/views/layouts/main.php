<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use rmrevin\yii\fontawesome\FA;

rmrevin\yii\fontawesome\AssetBundle::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--
<div class="container-fluid" style="background: #F2F2F2;">
<div class="container" style="padding: 3px;">
    <div class="col-md-9">
        <span style="color:black;padding: 0px; font-family: thoma, arial; font-weight: normal; font-size: 9pt;">
		<a href="https://biz.mail.ru/login/corozi.ru" style="color: black;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;
		<a href="http://crm.corozi.ru" style="color: black;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;
        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> &nbsp;г.Пермь ул.Буксирная д.4&nbsp;&nbsp;&nbsp;
		<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> &nbsp; info@corozi.ru &nbsp;&nbsp;&nbsp;
		<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp; (342) 217-90-70, 247-65-71	 &nbsp;&nbsp;&nbsp;
        </span>
    </div>
    <div class="col-md-3" style="text-align: right;">
        <a href="https://vk.com/public56011242" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='../../img/vkcolor.png'" onmouseout="this.src='../../img/vkblack.png'" src="/img/vkblack.png"></a>&nbsp;&nbsp;
        <a href="https://www.instagram.com/corozi/" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='../../img/instagramblack.png'" onmouseout="this.src='../../img/instagramblack.png'" src="/img/instagramblack.png"></a>&nbsp;&nbsp;
        <a href="https://twitter.com/corozi_perm/" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='../../img/twittercolor.png'" onmouseout="this.src='../../img/twitterblack.png'" src="/img/twitterblack.png"></a>&nbsp;&nbsp;
        <a href="https://www.youtube.com/channel/UCuvvWkLQb745c6QHw4NuHmw" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='../../img/youtubecolor.png'" onmouseout="this.src='../../img/youtubeblack.png'" src="/img/youtubeblack.png"></a>&nbsp;&nbsp;
        <a href="https://plus.google.com/+%D0%9E%D0%9E%D0%9E%D0%9A%D0%9E%D0%A0%D0%9E%D0%97%D0%98%D0%9F%D0%B5%D1%80%D0%BC%D1%8C" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='../../img/gcolor.png'" onmouseout="this.src='../../img/gblack.png'" src="/img/gblack.png"></a>&nbsp;&nbsp;
        <a href="https://запискикоррозиониста.рф/" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='/img/ljcolor.png'" onmouseout="this.src='../../img/ljblack.png'" src="../../img/ljblack.png"></a>&nbsp;&nbsp;
    </div>
</div>
</div>
-->

<div class="wrap">
    <?php
  NavBar::begin([
        //'brandLabel' => '<img src="../../frontend/web/img/logotype50.png" style="display:inline; margin-top: 0px; vertical-align: top; height: 32px;">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default',
            'style' => 'margin: 0px; padding: 0px; ' //Задаем принудительно стили
        ],
    ]);
    $menuItems = [
        ['label' => 'Компания', 'options' => ['id' => 'down_history'], 'items'=>[
            ['label' => 'Наша компания', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Наша команда', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Миссия', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Аккредитация', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Аттестация СУОТ', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Отзывы клиентов', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Ресурсы компании', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ]
        ],
        ['label' => 'Услуги', 'options' => ['id' => 'down_history'], 'items'=>[
            ['label' => 'Промышленная очистка', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Антикоррозионная защита', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Огнезащита конструкций', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            ['label' => 'Ремонт и восстановление бетонов', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Теплоизоляция оборудования', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Изготовление металлоконструкций', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Промышленный альпинизм', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Инспекционный контроль', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Обследование пром.объектов', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
        ]
        ],
        ['label' => 'Объекты', 'url' => ['/site/contact']],
        ['label' => 'Контрагентам', 'url' => ['/site/contact']],
        ['label' => 'Вакансии', 'url' => ['/site/contact']],
        ['label' => 'Контакты', 'url' => ['/site/contact']],
        ['label' => '|'],
        ['label' => FA::icon('envelope-o'), 'url' => ['/site/contact']],
        ['label' => FA::icon('user-o'), 'url' => ['/site/contact']],
    ];

    echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container-field"">
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>  <!--Виджет выводит информацию путь в верху-->
        <?= Alert::widget() ?> <!--Выводит сообщение ошибки, предупреждения-->
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
