<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 23.06.18
 * Time: 16:42
 */

use yii\helpers\Url;

$this->title = 'Сообщение отправленно';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="container" style="padding-top: 5%;">
    <div class="row">
        <div class="col-lg-7" style="padding-top: 60px;">
            <h1>Ваше сообщение отправлено</h1>
            <h4>Благодарим Вас за обращение в нашу компанию</h4>
            <p>В близжайшее время наши специалисты рассмотрят Ваш запрос. Благодарим Вас за обращение в нашу компанию и надеемся на дальнейшее плодотворное сотрудничество.</p>

            <br><br><a href="<? echo Url::toRoute(['/index']) ?>" class="btn btn-primary btn-lg">НА ГЛАВНУЮ</a>
        </div>
        <div class="col-lg-5" style="text-align: center;">
            <img src="../img/mailpeople.jpg" width="350px">
        </div>
    </div>
</div>