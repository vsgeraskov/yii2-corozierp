<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Администрирование';

/*$this->params['breadcrumbs'][] = ['label' => 'Подкатегория', 'url' => ['corozi.ru']];*/
$this->params['breadcrumbs'][] = $this->title;

?>

<br>
<br>

<a href="<?= Url::to('/erp/admin/user'); ?>"  class="optikbottom" title="Просмотр пользователей зарегистрированных в системе">
    <span style="font-size: 25pt;"><?= \rmrevin\yii\fontawesome\FA::icon('users')?></span>
    <span class="textmenubottom" style="font-size: 9pt;">Пользователи</span>
</a>

<a href="<?= Url::to('/erp/admin/assignment'); ?>"  class="optikbottom" title="Назначение ролей и отдельных правил для зарегистрированых пользователей">
    <span style="font-size: 25pt;"><?= \rmrevin\yii\fontawesome\FA::icon('key')?></span>
    <span class="textmenubottom">Назначения</span>
</a>

<a href="<?= Url::to('/erp/admin/role'); ?>"  class="optikbottom" title="Создание ролей для пользователей">
    <span style="font-size: 25pt;"><?= \rmrevin\yii\fontawesome\FA::icon('user')?></span>
    <span class="textmenubottom"><br>Роли</span>
</a>

<a href="<?= Url::to('/erp/admin/permission'); ?>"  class="optikbottom" title="Создание разрешений, схожа с ролями по принципу действия и доступу">
    <span style="font-size: 25pt;"><?= \rmrevin\yii\fontawesome\FA::icon('child')?></span>
    <span class="textmenubottom"><br>Разрешения</span>
</a>

<a href="<?= Url::to('/erp/admin/rule'); ?>"  class="optikbottom" title="Создание и привязка правил. Как правило выносится в отдельный класс">
    <span style="font-size: 25pt;"><?= \rmrevin\yii\fontawesome\FA::icon('angellist')?></span>
    <span class="textmenubottom"><br>Правила</span>
</a>

<a href="<?= Url::to('/erp/admin/route'); ?>"  class="optikbottom" title="Маршрутизация доступа к страницам">
    <span style="font-size: 25pt;"><?= \rmrevin\yii\fontawesome\FA::icon('road')?></span>
    <span class="textmenubottom"><br>Маршруты</span>
</a>
<br>
<a href="<?= Url::to('/erp/administration/userblock'); ?>"  class="optikbottom" title="Блокировка пользователей">
    <span style="font-size: 25pt;"><?= \rmrevin\yii\fontawesome\FA::icon('user-times')?></span>
    <span class="textmenubottom" style="text-align: center; font-size: 9pt;">Блокировка<br>пользователя</span>
</a>