<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'ООО Корози, Карта проектов';

/* Подключаем API YANDEX для отображения слоя карты */
$this->registerJsFile('https://api-maps.yandex.ru/2.1/?lang=ru_RU',['position' => $this::POS_HEAD], 'yandex-map');

/* Скрипт активации каты Yandex */
$this->registerJs(' 
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [58.034154, 56.042330],
                zoom: 16,
                controls: [\'zoomControl\']    
            }); 
            
            myPlacemark = new ymaps.Placemark([58.034120, 56.038470], {
                
            });
            
           
            myMap.behaviors.disable(\'scrollZoom\'); 
            myMap.geoObjects.add(myPlacemark);
        }',
    $this::POS_READY, 'yandex-map-visible' );
?>

<div class="container-fluid row" id="map" style="width: 100%; height: 90vh; padding: 0px; margin: 0px;">
    <!--<div class="col-xl-9 col-lg-8 col-md-8 col-sm-8" ></div>
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4" style="background-color: #ffffff; opacity: 0.8; height: 90vh; z-index: 1000;">
        <h1 style="padding-bottom: 20px;">Объект</h1>

        <div class="row" style="margin: 10px;">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"><img src="../img/checkin.png" alt=""/></div>
            <div class="col-sm-11"><p>Заказчик</p></div>
        </div>

        <div class="row" style="margin: 10px;">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"><img src="../img/phonealt.png" alt="" /></div>
            <div class="col-sm-11"><p>Адрес и город</p></div>
        </div>

        <div class="row" style="margin: 10px;">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"><img src="../img/shredder.png" alt="" /></div>
            <div class="col-sm-11"><p>Описание</p></div>
        </div>

        <div class="row" style="margin: 10px;">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"><img src="../img/envelope.png" alt="" /></div>
            <div class="col-sm-11"><p>Отзыв</p></div>
        </div>
        <div class="row" style="margin: 10px;">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"><img src="../img/icon-skype.png" alt="" /></div>
            <div class="col-sm-11"><p>Фотография</p></div>
        </div>
        <div class="row" style="margin: 10px;">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"><img src="../img/icon-time.png" alt="" /></div>
            <div class="col-sm-11"><p>Режим работы <br>пн-пт: 9:00 - 18:00, <br>сб. и вс. выходной</p></div>
        </div>
        <div class="row" style="margin: 10px; padding-top: 15px">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"></div>
            <div class="col-sm-11"><h4>Мы в соцсетях.</h4></div>
        </div>
        <div class="row" style="margin: 10px;">
            <div class="col-sm-1" style="align-content: center; vertical-align: middle;"></div>
            <div class="col-sm-11">
                <a href="#"><img src="../img/social/vk2.png" alt="" style="padding: 5px;"/></a>
                <img src="../img/social/fbsmalcolor.png" alt="" style="padding: 5px;"/>
                <!--<img src="../img/social/googleplus.png" alt="" />-->
                <!--<img src="../img/social/twitter.png" alt="" style="padding: 5px;"/>-->
                <!--<img src="../img/social/linkedin.png" alt="" />-->
                <!--<img src="../img/social/instagramsmalcolor.png" alt="" style="padding: 5px;"/>
                <img src="../img/social/livejournal3.png" alt="" style="padding: 5px;"/>
                <img src="../img/social/youtube3.png" alt="" style="padding: 5px;"/>
            </div>
        </div>
    </div>-->
</div>