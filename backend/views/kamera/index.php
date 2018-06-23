<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Проект Камера';

/*$this->params['breadcrumbs'][] = ['label' => 'Подкатегория', 'url' => ['corozi.ru']];*/
$this->params['breadcrumbs'][] = $this->title;

?>

<a href="<?= Url::to('/erp/kamera/view'); ?>"  class="optikbottom" title="Просмотр всех заявок в системе">
    <span style="font-size: 25pt;"><i class="fa fa-copy"></i><br></span>
    <span class="textmenubottom" style="font-size: 9pt;">Заявки камера</span>
</a>

<? if(Yii::$app->user->can('canCreateKameraZakaz')): ?>
    <a href="<?= Url::to(['create']); ?>"  class="optikbottom" title="Создать новую заявку">
        <span style="font-size: 25pt;"><i class="fa fa-paste"></i><br></span>
        <span class="textmenubottom" style="font-size: 9pt;">Новая заявка</span>
    </a>
<? endif; ?>

<!--<a href="<?/*= Url::to('/erp/admin/assignment'); */?>"  class="optikbottom" title="Назначение ролей и отдельных правил для зарегистрированых пользователей">
    <span style="font-size: 25pt;"><?/*= \rmrevin\yii\fontawesome\FA::icon('key')*/?></span>
    <span class="textmenubottom">Назначения</span>
</a>

<a href="<?/*= Url::to('/erp/admin/role'); */?>"  class="optikbottom" title="Создание ролей для пользователей">
    <span style="font-size: 25pt;"><?/*= \rmrevin\yii\fontawesome\FA::icon('user')*/?></span>
    <span class="textmenubottom"><br>Роли</span>
</a>

<a href="<?/*= Url::to('/erp/admin/permission'); */?>"  class="optikbottom" title="Создание разрешений, схожа с ролями по принципу действия и доступу">
    <span style="font-size: 25pt;"><?/*= \rmrevin\yii\fontawesome\FA::icon('child')*/?></span>
    <span class="textmenubottom"><br>Разрешения</span>
</a>

<a href="<?/*= Url::to('/erp/admin/rule'); */?>"  class="optikbottom" title="Создание и привязка правил. Как правило выносится в отдельный класс">
    <span style="font-size: 25pt;"><?/*= \rmrevin\yii\fontawesome\FA::icon('angellist')*/?></span>
    <span class="textmenubottom"><br>Правила</span>
</a>
-->