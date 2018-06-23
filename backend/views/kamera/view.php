<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 17.05.18
 * Time: 11:21

Проссмотр всех заявок в базе данных
 */

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Заявки проекта камера';

$this->params['breadcrumbs'][] = ['label' => 'Меню проект Камера', 'url' => ['/kamera']];
$this->params['breadcrumbs'][] = 'Заявки';

//Скрипт активации
$script = <<< JS
    function showHide(element_id) {
                //Если элемент с id-шником element_id существует
                if (document.getElementById(element_id)) { 
                    //Записываем ссылку на элемент в переменную obj
                    var obj = document.getElementById(element_id); 
                    //Если css-свойство display не block, то: 
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; //Показываем элемент
                    }
                    else obj.style.display = "none"; //Скрываем элемент
                }
                //Если элемент с id-шником element_id не найден, то выводим сообщение
                else alert("Элемент с id: " + element_id + " не найден!"); 
            }   
JS;

$this->registerJs($script, yii\web\View::POS_HEAD); //Применим скрипт в конце

?>

<? if(Yii::$app->user->can('canCreateKameraZakaz')): ?>
<div class="container-fluid ">
    <div class="raw" style="margin-bottom: 25px;">
        <div class="col-lg-12 text-right">
            <a href="<?= Url::to(['kamera/create'])?>" class="btn btn-primary">Добавить</a>
        </div>
    </div>
</div>
<? endif; ?>

<div class="container-fluid" style="margin-top: 10px; padding: 5px; background-color: #367fa9;">
    <div class="raw" style="color: #fafafa;">
        <div class="col-lg-1"></div>
        <div class="col-lg-2" style="text-align: center;"><strong>Дата выдачи</strong></div>
        <div class="col-lg-3" style="text-align: left;"><strong>ФИО / Компания</strong></div>
        <div class="col-lg-2"><strong>Телефон</strong></div>
        <div class="col-lg-2"><strong>Сумма</strong></div>
        <div class="col-lg-2" style="text-align: center;"><strong>Статус</strong></div>
    </div>
</div>

<?php

$idcount = 0;
$stryearold = '';
$strmonthold = '';


foreach($model as $modelkamera)
{
    //Кто принял заявку
    $qeryuseradd = \app\models\People::findOne($modelkamera->useradd);
    $fiouseradd = $qeryuseradd->surname." ".mb_substr($qeryuseradd->name,0,1,'UTF-8').".".mb_substr($qeryuseradd->middle_name,0,1,'UTF-8').".";

    //Кто реализовал заявку
    $textrealization = ' '; //Сбрасываем переменную в null
    if($modelkamera->realization==1)
    {
        if ($qeryrealization = \app\models\People::findOne($modelkamera->userrealization))
        {
            $fiorealization = $qeryrealization -> surname . " " . mb_substr($qeryrealization -> name, 0, 1, 'UTF-8') . "." . mb_substr($qeryrealization -> middle_name, 0, 1, 'UTF-8') . ".";
        } else {
            $qeryrealization = \app\models\User::findOne($modelkamera->userrealization);
            $fiorealization = $qeryrealization->username;
        }

        $daterealization = new DateTime(); //Дата выдачи заказа
        $daterealization->setTimestamp($modelkamera->date_realization);
        $daterealization = $daterealization->format('d.m.y');

        $textrealization = "<p style=\"font-style: italic; font-size: 8pt;\">Выполнена - ".$fiorealization." (".$daterealization.") </p>";
    }

    //Кто принял оплату
    $textpayment = ' ';
    if($modelkamera->payment==1)
    {
        if ($qerypay = \app\models\People::findOne($modelkamera->userpayment))
        {
            $fiopay = $qerypay -> surname . " " . mb_substr($qerypay -> name, 0, 1, 'UTF-8') . "." . mb_substr($qerypay -> middle_name, 0, 1, 'UTF-8') . ".";
        } else {
            $qerypay = \app\models\User::findOne($modelkamera->userpayment);
            $fiopay = $qerypay->username;
        }

        $datepay = new DateTime(); //Дата выдачи заказа
        $datepay->setTimestamp($modelkamera->date_payment);
        $datepay = $datepay->format('d.m.y');

        $textpayment = "<p style=\"font-style: italic; font-size: 8pt;\">Оплачена - ".$fiopay." (".$datepay.") </p>";
    }

    //Кто выдал заявку
    $textgive = ' ';

    if($modelkamera->give==1)
    {
        if ($qerygive = \app\models\People::findOne($modelkamera->usergive))
        {
            $fiogive = $qerygive -> surname . " " . mb_substr($qerygive -> name, 0, 1, 'UTF-8') . "." . mb_substr($qerygive -> middle_name, 0, 1, 'UTF-8') . ".";
        } else {
            $qerygive = \app\models\User::findOne($modelkamera->usergive);
            $fiogive = $qerygive->username;
        }

        $dategive = new DateTime(); //Дата выдачи заказа
        $dategive->setTimestamp($modelkamera->date_give);
        $dategive = $dategive->format('d.m.y');

        $textgive = "<p style=\"font-style: italic; font-size: 8pt;\">Передано - ".$fiogive." (".$dategive.") </p>";
    }

    $idcount++;

    $dateinzakaz = new DateTime(); //Дата приема заказа
    $dateinzakaz->setTimestamp($modelkamera->date_in);
    $dateinzakaz = $dateinzakaz->format('d.m.y');

    $dateoutzakaz = new DateTime(); //Дата выдачи заказа
    $dateoutzakaz->setTimestamp($modelkamera->date_out);
    $dateoutzakaz = $dateoutzakaz->format('d.m.y');

    //скрипт для вывода корректно дату
    $DateArrayOut = explode(".", $dateoutzakaz);
    switch ($DateArrayOut[1]){
        case 1: $strmonth='январь'; break;
        case 2: $strmonth='февраль'; break;
        case 3: $strmonth='март'; break;
        case 4: $strmonth='апрель'; break;
        case 5: $strmonth='май'; break;
        case 6: $strmonth='июнь'; break;
        case 7: $strmonth='июль'; break;
        case 8: $strmonth='август'; break;
        case 9: $strmonth='сентябрь'; break;
        case 10: $strmonth='октябрь'; break;
        case 11: $strmonth='ноябрь'; break;
        case 12: $strmonth='декабрь'; break;
    }

    switch ($DateArrayOut[2]){
        case 17: $stryear='2017'; break;
        case 18: $stryear='2018'; break;
        case 19: $stryear='2019'; break;
        case 20: $stryear='2020'; break;
        case 21: $stryear='2021'; break;
        case 22: $stryear='2022'; break;
        case 23: $stryear='2023'; break;
        case 24: $stryear='2024'; break;
        case 25: $stryear='2025'; break;
        case 26: $stryear='2026'; break;
        case 27: $stryear='2027'; break;
        case 28: $stryear='2028'; break;
        case 29: $stryear='2029'; break;
    }

    //Выводим год заявки
    if($stryearold != $stryear)
    {
        $stryearold = $stryear; //Выравниваем переменные

        $summyear = \app\models\Kamera::find()->where('YEAR(FROM_UNIXTIME(date_out)) = :stryear', [':stryear' => $stryear])->sum('price');

        echo "
        <div class=\"container-fluid \" style=\"background-color: #fffffa; border-bottom: #b8b8b8 solid 1px;\">
            <div class=\"raw\" style=\"margin-bottom: 25px;\">
                <div class=\"col-lg-10 text-left\">
                    <p style=\"font-size: 18pt; font-family: bebas_neue;\">" . $stryear . "</p>
                </div>
                <div class=\"col-lg-2 text-left\">
                    <p style=\"font-size: 18pt; font-family: bebas_neue;\">" .number_format($summyear, 2, ',',' '). " <i class='fa fa-rub' style='font-size: 12pt;'></i> </p>
                </div>
            </div>
        </div>";
    }

    //Выводим месяц заявки
    if($strmonthold != $strmonth)
    {
        $strmonthold = $strmonth; //Выравниваем переменные

        $summmonth = \app\models\Kamera::find()->where('YEAR(FROM_UNIXTIME(date_out)) = :stryear', [':stryear' => $stryear])->andwhere('MONTH(FROM_UNIXTIME(date_out)) = :strmonth', [':strmonth' => $DateArrayOut[1]])->sum('price');

        echo "
        <div class=\"container-fluid \" style=\"background-color: #fffffa; border-bottom: #b8b8b8 solid 1px;\">
            <div class=\"raw\" style=\"\">
                <div class=\"col-lg-10 text-left\">
                    <p style=\"font-size: 18pt; font-family: bebas_neue; padding-left: 25px; margin: 0;\">" . $strmonth . "</p>
                </div>
                <div class=\"col-lg-2 text-left\">
                    <p style=\"font-size: 18pt; font-family: bebas_neue; padding-left: 25px; margin: 0;\">" . number_format($summmonth, 2, ',',' ') . "</p>
                </div>
            </div>
        </div>";
    }

    //фон таблицы при определенныъ стадиях выполнения заказа
    if($modelkamera->realization==1) {
        if($modelkamera->payment==1) {
            if($modelkamera->give==1) {$bgcolor='f3f3f3';}
            else {$bgcolor='e0ecff';}
        }else {$bgcolor='ffffea';}
    } else {$bgcolor='fffffa';}

    echo "<div class=\"container-fluid\" style=\"background-color: #".$bgcolor."; padding: 8px; border-bottom:#b8b8b8 solid 1px\">
            <div class=\"raw\" style=\"font-size: 10pt\">
            <div class=\"col-lg-1\">
                <a href=\"javascript:void(0)\" onclick=\"showHide('".$idcount."')\" title=\"Больше информации\">
                    <i class=\"fa fa-plus\" aria-hidden=\"true\" style=\"color:#15b208; font-size:12pt; vertical-align:middle;\"></i> &nbsp;
                </a>
            </div>
            <div class=\"col-lg-2\" style=\"text-align: center;\">".$dateoutzakaz."</div>
            <div class=\"col-lg-3\" style=\"text-align: left;\">".$modelkamera->client."</div>
            <div class=\"col-lg-2\">".$modelkamera->phone."</div>
            <div class=\"col-lg-2\">".number_format($modelkamera->price, 2, ',',' ')."</div>
            <div class=\"col-lg-2\" style=\"text-align: right;\">";

    if($modelkamera->realization!=1 && Yii::$app->user->can('canUpdateFlagKameraRealization'))
    {
        echo "<a href=\"" . Url ::to(['kamera/flagrealization', 'id_zakaz' => $modelkamera->id_kamera]) . "\" class=\"btn btn-primary btn-sm\" style=\"margin: 1px; padding: 2px;\">
                &nbsp;<i class=\"fa fa-download\"></i>&nbsp; Выполнено &nbsp;
                </a>";
    }

    if($modelkamera->realization==1 && $modelkamera->payment!=1 && Yii::$app->user->can('canUpdateFlagKameraPayment'))
    {
        echo "<a href=\"" . Url ::to(['kamera/flagpayment', 'id_zakaz' => $modelkamera->id_kamera]) . "\" class=\"btn btn-success btn-sm\" style=\"margin: 1px; padding: 2px;\">
                &nbsp;<i class=\"fa fa-rub\"></i>&nbsp; Оплачено &nbsp;
                </a>";
    }

    if($modelkamera->realization==1 && $modelkamera->payment==1 && $modelkamera->give!=1 && Yii::$app->user->can('canUpdateFlagKameraGive'))
    {
        echo "<a href=\"" . Url ::to(['kamera/flaggive', 'id_zakaz' => $modelkamera->id_kamera]) . "\" class=\"btn btn-warning btn-sm\" style=\"margin: 1px; padding: 2px;\">
                &nbsp;<i class=\"fa fa-truck\"></i>&nbsp; Передано &nbsp;
                </a>";
    }

    if($modelkamera->realization==1 && $modelkamera->payment==1 && $modelkamera->give==1)
    {
        echo "&nbsp;<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color:#15b208; font-size:14pt; vertical-align:middle;\"></i>&nbsp;&nbsp;&nbsp;&nbsp;";
    }

     echo "           
            </div>
        </div>
    </div>";

    echo "<div class=\"container-fluid\" id=\"".$idcount."\" style=\"display: none; background-color: #".$bgcolor."; padding: 8px; border-bottom:#b8b8b8 solid 1px\">
            <div class=\"raw\" style=\"font-size: 10pt\">
            <div class=\"col-lg-1\">
                id: ".$modelkamera->id_kamera." 
            </div>
            
            <div class=\"col-lg-5\" style=\"text-align: left; opacity: 0.8;\">
                <p>".$modelkamera->opisanie."</p> 
            </div>
            <div class=\"col-lg-3\">
                <p style=\"font-style: italic; font-size: 8pt;\">Принята - ".$fiouseradd." (".$dateinzakaz.") </p>".$textrealization." ".$textpayment." ".$textgive."
            </div>
            <div class=\"col-lg-3\" style=\"text-align: right;\">
                <a href=\"".Url::to(['kamera/update', 'id_zakaz' => $modelkamera->id_kamera])."\"><i class=\"fa fa-pencil\" aria-hidden=\"true\" title=\"Редактировать заявку\" style=\"color:#767676; font-size:12pt; vertical-align:middle; \" ></i></a> &nbsp;
                <a href=\"".Url::to(['kamera/dogovor', 'id_zakaz' => $modelkamera->id_kamera])." \" target=\"_blank\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\" title=\"Распечатать договор\" style=\"color:#767676; font-size:12pt; vertical-align:middle;\"></i></a> &nbsp;
            </div>
        </div>
    </div>";
}

?>