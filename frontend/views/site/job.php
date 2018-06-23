<?php
/**
 * Created by PhpStorm.
 * User: vsgeraskov
 * Date: 12.03.18
 * Time: 21:52
 */

use yii\helpers\Url;

$this->title = 'Вакансии, ООО Корози, Компания Промышленного Сервиса г.Пермь';
?>

<div class="site-job" style="padding: 0px; margin: auto 0px;">
    <div class="indextopslide" style="background: url(/frontend/web/img/slider/fonalpinizm.jpg) no-repeat; background-size: cover; background-position: center center;">
        <div class="container inner">
            <h1 class="slederfon" align="left" style="font-size: 38pt;">
                ВАКАНСИИ
            </h1>
            <h2 class="sliderfon" align="left">
                Мы не устраняем кадровые пробелы <br>
                Мы ищем профессионалов своего дела<br>
                желающих реализовать свой потенциал
            </h2><br>
            <p align="left"><a href="<?php echo Url::toRoute(['/signup']); ?>"  class="btn btn-primary btn-lg">ОТПРАВИТЬ РЕЗЮМЕ</a></p>
        </div>
    </div>


    <div class="container-fluid" style="padding-top: 50px; padding-bottom: 20px">
        <p class="text-center"><img src="../../frontend/web/img/zagrivleft.png" alt="" height="35px"><span style="color:black; padding-left: 1px; font-family: HelveticaNeueCyrUltraLight, arial; font-weight: 500; font-size: 34pt; line-height: 1.2; opacity:0.75; vertical-align: middle;">&nbsp;&nbsp;&nbsp;МЫ ГАРАНТИРУЕМ&nbsp;&nbsp;&nbsp;</span><img src="../../frontend/web/img/zagrivright.png" alt="" height="35px"></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="text-center" style="padding: 15px;"><img src="../img/icon/contractuser.png" width="64px"></p>
                <h4 class="text-center"><strong>ОФИЦИАЛЬНОЕ ТРУДОУСТРОЙСТВО</strong></h4>
                <p class="text-justify">
                    Мы гарантируем Вам официальное трудоустройство в соответствии с ТК РФ. С каждым сотрудником заключаем договор. Никаких хитростей и скрытых условий.
                </p>
            </div>
            <div class="col-md-3">
                <p class="text-center" style="padding: 15px;"><img src="../img/icon/bank.png" width="64px"></p>
                <h4 class="text-center"><strong>СТАБИЛЬНАЯ <br>ЗАРАБОТНАЯ ПЛАТА</strong></h4>
                <p class="text-justify">
                    Мы берем на себя обязательство стабильно выплачивать заработную плату своим сотрудникам не реже 1 раза в 2 недели в соответствии с рекомендациями ТК РФ.
                </p>
            </div>
            <div class="col-md-3">
                <p class="text-center" style="padding: 15px;"><img src="../img/icon/prohectinter.png" width="64px"></p>
                <h4 class="text-center"><strong>ИНТЕРЕСНЫЕ <br>ПРОЕКТЫ</strong></h4>
                <p class="text-justify">
                    Наша компания принимает участие во множестве самых разнообразных проектах от самы небольших, до крупных и масштабных по строительству целых заводов.
                </p>
            </div>
            <div class="col-md-3">
                <p class="text-center" style="padding: 15px;"><img src="../img/icon/eduuser.png" width="64px"></p>
                <h4 class="text-center"><strong>ПРОФЕССИОНАЛЬНОЕ<br>ОБУЧЕНИЕ</strong></h4>
                <p class="text-justify">
                    Ежегодно мы инвестируем значительную сумму на повышение кваллификации наших сотрудников, а если у Вас нет опыта, мы дадим новую востребованную специальность.
                </p>
            </div>

        </div>
    </div>

    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <p class="text-center"><img src="../../frontend/web/img/zagrivleft.png" alt="" height="35px"><span style="color:black; padding-left: 1px; font-family: HelveticaNeueCyrUltraLight, arial; font-weight: 500; font-size: 34pt; line-height: 1.2; opacity:0.75; vertical-align: middle;">&nbsp;&nbsp;&nbsp;КАК ЭТО РАБОТАЕТ&nbsp;&nbsp;&nbsp;</span><img src="../../frontend/web/img/zagrivright.png" alt="" height="35px"></p>
    </div>

    <div class="container">
        <div class="raw">
            <div class="col-md-3">
                <h1 class="text-center">ШАГ №1</h1>
                <p class="text-justify text-secondary">
                    <strong>Зарегистрируйтесь в системе</strong> и следуйте инструкциям мастера регистрации. Заполните вимательно все поля.
                </p>
                <!--<a href="<?php /*echo Url::toRoute(['/signup']); */?>"  class="btn btn-primary">ОТПРАВИТЬ РЕЗЮМЕ</a>-->
            </div>
            <div class="col-md-3">
                <h1 class="text-center">ШАГ №2</h1>
                <p class="text-justify">
                    <strong>Активируйте Ваш аккаунт</strong> мы направим Вам на почту инструкцию по активации в нашей системе, активируйте и зайдите в систему
                </p>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">ШАГ №3</h1>
                <p class="text-justify">
                    <strong>Заполните резюме</strong> отредактируйте свой профиль
                </p>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">ШАГ №4</h1>
                <p class="text-justify">
                    <strong>Подпишитесь на нашу информационную рассылку</strong> и будьте в курсе всех актуальных вакансий
                    и предложений компании.
                </p>
            </div>
        </div>
    </div>

    <!--Наши вакансии-->
    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <p class="text-center"><img src="../../frontend/web/img/zagrivleft.png" alt="" height="35px"><span style="color:black; padding-left: 1px; font-family: HelveticaNeueCyrUltraLight, arial; font-weight: 500; font-size: 34pt; line-height: 1.2; opacity:0.75; vertical-align: middle;">&nbsp;&nbsp;&nbsp;НАШИ ВАКАНСИИ&nbsp;&nbsp;&nbsp;</span><img src="../../frontend/web/img/zagrivright.png" alt="" height="35px"></p>
    </div>

    <div class="container" style="padding-bottom: 50px;">
        <div class="row">

            <div class="col-md-4">
                <div style="width: 90%; background: url(/frontend/web/img/job/jobpesok.jpg) no-repeat; background-size: cover; background-position: center center; padding: 15px; box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5); border-radius: 5px; margin: 0 auto;">
                <h2 style="color: white;">Пескоструйщик</h2>
                <p style="color: white;"> з/п от 35 000 руб.</p>
                <p style="color: white; font-size: 9pt;">
                    - Возраст от 18 лет <br>
                    - Трудоустройство в соответвтсии с ТК РФ <br>
                    - Стабильная выплата заработной платы <br>
                    - Наличие кваллификационных удостоверений <br>
                    - Готовность к командировкам до 2 мес.
                <br>
                <br>
                </p>
                <!--<a href="<?php /*echo Url::toRoute(['/signup']); */?>"  class="btn btn-primary">ОТПРАВИТЬ РЕЗЮМЕ</a>-->
                <br><br>
                </div>
            </div>

            <div class="col-md-4">
                <div style="width: 90%; background: url(/frontend/web/img/job/jobpaint.jpg) no-repeat; background-size: cover; background-position: center center; padding: 15px; box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5); border-radius: 5px; margin: 0 auto;">
                    <h2 style="color: white;">Маляр</h2>
                    <p style="color: white;"> з/п от 40 000 руб.</p>
                    <p style="color: white; font-size: 9pt;">
                    - Возраст от 18 лет <br>
                    - Трудоустройство в соответвтсии с ТК РФ <br>
                    - Стабильная выплата заработной платы <br>
                    - Наличие кваллификационных удостоверений <br>
                    - Готовность к командировкам до 2 мес.
                    <br>
                    <br>
                    </p>
                    <!--<a href="<?php /*echo Url::toRoute(['/signup']); */?>"  class="btn btn-primary">ОТПРАВИТЬ РЕЗЮМЕ</a>-->
                    <br><br>
                </div>
            </div>

            <div class="col-md-4">
                <div style="width: 90%; background: url(/frontend/web/img/job/jobmaster.jpg) no-repeat; background-size: cover; background-position: center center; padding: 15px; box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5); border-radius: 5px; margin: 0 auto;">
                <h2 style="color: white;">Мастер СМР</h2>
                <p style="color: white;"> з/п от 40 000 руб.</p>
                <p style="color: white; font-size: 9pt;">
                    - Возраст от 18 лет <br>
                    - Трудоустройство в соответвтсии с ТК РФ <br>
                    - Стабильная выплата заработной платы <br>
                    - Наличие кваллификационных удостоверений <br>
                    - Готовность к командировкам до 2 мес.
                    <br>
                    <br>
                </p>
                <!--<a href="<?php /*echo Url::toRoute(['/signup']); */?>"  class="btn btn-primary">ОТПРАВИТЬ РЕЗЮМЕ</a>-->
                <br><br>
                </div>
            </div>

        </div>

    <!--Форма подписки на рассылку-->


</div>
