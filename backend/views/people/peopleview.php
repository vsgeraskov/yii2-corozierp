<?php
/* @var $this yii\web\View */

use \yii\helpers;

$this->title = 'Профиль пользователя';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid" style="padding-top: 15px;">
    <div class="row align-items-center">
        <div class="col-md-2" style="text-align: center;">
            <img src="../img/avatar/noavatar.jpg" class="img-circle img-responsive" alt="Автатар" style="box-shadow: 0 2px 4px rgba(0, 0, 0, .2);" width="150px"> <br>
        </div>
        <div class="col-md-10" style="">
            <div class="row" style="border-bottom:#cfcfcf solid 1px;">
                <div class="col-lg-8 col-md-6 col-sm-6">
                    <p style="font-family: bebas_neue; font-size: 26pt;"><?= $model->surname;?> <?= $model->name; ?> <?= $model->middle_name ?></p>
                    <p style="font-size: 10pt; font-style: italic; opacity: 0.5;">Последнее изменение профиля
                        <?php //Преобразование в понятный формат
                        $dateupdateuser = new DateTime();
                        $dateupdateuser->setTimestamp($model->created_at);
                        echo $dateupdateuser->format("d.m.Y в H:i");
                        ?>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-disable" style="text-align: right; padding-top: 8px; ">
                    <a href="<?= helpers\Url::to(['/people/peopleeditform'])?>" class="btn btn-primary" role="button">Редактировать</a>
                </div>
            </div>

            <div class="row" style="padding-top: 15px;">
                <div class="col-md-3">
                    <p style="opacity: 0.8;"><i class="fa fa-briefcase"></i> Рейтинг: <strong>3,5</strong></p>
                </div>
                <div class="col-md-3">
                    <p style="opacity: 0.8;"><i class="fa fa-briefcase"></i> Проектов: <strong>6</strong></p>
                </div>
                <div class="col-md-3">
                    <!--<p><i class="fa fa-briefcase"></i> Рейтинг: <strong>3,5</strong></p>-->
                </div>
                <div class="col-md-3">
                    <!--<p><i class="fa fa-briefcase"></i> Рейтинг: <strong>3,5</strong></p>-->
                </div>
            </div>
        </div>
    </div>

    <!--Vkladki-->
    <!-- Навигация вкладки -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#myproject" role="tab">Мои проекты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#myprof" role="tab">Характеристика</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#pasport" role="tab">Паспорт ИНН СНИЛС</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#educate" role="tab">Образование</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#expirents" role="tab">Опыт работы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#kontac" role="tab">Контакты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#spec" role="tab">Спецодежда</a>
        </li>
    </ul>

    <!-- Вкладка панели -->
    <div class="tab-content">
        <div class="tab-pane active" id="statistic" role="tabpanel">
            <?php $myRol = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()); ?>
        </div>
        <!--МОИ ПРОЕКТЫ-->
        <div class="tab-pane" id="myproject" role="tabpanel" style="background-color: white; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, .2);">
            <p>У Вас нет реализованных проектов, начните принимать участие в наших проектах.</p>
        </div>
        <!--ХАРАКТЕРИСТИКА-->
        <div class="tab-pane" id="myprof" role="tabpanel" style="background-color: white; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, .2);">
            <div class="row">
                <div class="col-md-4">
                    <p><i class="fa fa-briefcase"></i> Должность: <strong>Пескоструйщик </strong></p>
                    <p><i class="fa fa-birthday-cake"></i> Дата рождения: <strong>21 сентября 1986</strong></p>
                </div>
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-venus-mars"></i> Пол: <strong>
                            <?php
                            if($model->sex == '0')
                                echo 'Мужской';
                            else
                                echo 'Женский';
                            ?></strong>
                    </p>
                    <p>
                        <i class="fa fa-users"></i> Семейное положение: <strong>
                            <?php
                            if($model->marriage == '0')
                                echo 'Холост';
                            else
                                echo 'Женат/Замужем';
                            ?> </strong>
                    </p>
                    <p>
                        <i class="fa fa-car"></i> Вод.удостоверение <strong><?= $model->drive ?>
                        </strong> кат. <strong><?= $model->catdrive ?> </strong>
                    </p>
                    <p>
                        <i class="fa fa-money"></i> Желаемый оклад: <strong><?= $model->pay ?> руб. </strong>
                    </p>

                </div>
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-fire-extinguisher"></i><strong>
                            <?php
                            if($model->smoke == '0')
                                echo 'Не курю';
                            else
                            {
                                if($model -> smoke == '1')
                                    echo 'Курю иногда';
                                else
                                    echo 'Курю постоянно';
                            }
                            ?></strong>
                    </p>
                    <p>
                        <i class="fa fa-beer"></i> <strong>
                            <?php
                            if($model->alcohol == '0')
                                echo 'Не употребляю';
                            else
                            {
                                if($model -> alcohol == '1')
                                    echo 'Употребляю редко (праздники)';
                                else
                                    echo 'Употребляю часто (более 3х в неделю)';
                            }
                            ?>
                        </strong>
                    </p>
                    <p>
                        <i class="fa fa-balance-scale"></i><strong>
                            <?php
                            if($model->law == '0')
                                echo 'Не судим';
                            else
                            {
                                if($model -> law == '1')
                                    echo 'Имею погашенную судимость';
                                else
                                    echo 'Имею не погашенную судимость';
                            }
                            ?></strong>
                    </p>
                    <p>
                        <i class="fa fa-plane"></i><strong>
                            <?php
                            if($model->bistrip == '0')
                                echo 'Не готов к командировкам';
                            else
                            {
                                if($model -> bistrip == '1')
                                    echo 'Готов к командировкам до 1 мес.';
                                else
                                    echo 'Готов к командировкам от 1 до 2 мес.';
                            }
                            ?> </strong>
                    </p>
                </div>
        </div>
        </div> <!--СТОП ХАРАКТЕРИСТИКА-->
        <!--ПАСПОРТ-->
        <div class="tab-pane" id="pasport" role="tabpanel" style="background-color: white; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, .2);">
            <div class="row">
                <div class="col-md-4">
                    <h3>Паспорт</h3>
                    <p><?= $model->pasport ?></p>
                </div>
                <div class="col-md-4">
                    <h3>Прописка</h3>
                    <p><?= $model->register ?></p>
                </div>
                <div class="col-md-4">
                    <h3>Адрес проживания</h3>
                    <p><?= $model->adress ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h3>ИНН и СНИЛС</h3>
                    <p>ИНН: <strong><?= $model->inn ?></strong></p>
                    <p>СНИЛС: <strong><?= $model->snils ?></strong></p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <!--ОБРАЗОВАНИЕ-->
        <div class="tab-pane" id="educate" role="tabpanel" style="background-color: white; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, .2);">
            <h3>Образование</h3>
            <p><?= $model->education ?></p>
            <h3>Навыки</h3>
            <p><?= $model->skills ?></p>
        </div>
        <!--ОПЫТ РАБОТЫ-->
        <div class="tab-pane" id="expirents" role="tabpanel" style="background-color: white; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, .2);">
            <h3>Опыт работы</h3>
            <p><?= $model->experience ?></p>
        </div>
        <!--КОНТАКТЫ-->
        <div class="tab-pane" id="kontac" role="tabpanel" style="background-color: white; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, .2);">
            <p><i class="fa fa-envelope"></i> E-mail: <strong><?= $model->email ?> </strong></p>
            <p><i class="fa fa-phone"></i> Телефон: <strong><?= $model->phone ?> </strong></p>
            <?php
            if($model->socseti1!=null)
                echo "<p><i class=\"fa fa-globe\"></i> ".$model->socseti1."</p>";

            if($model->socseti2!=null)
                echo "<p><i class=\"fa fa-globe\"></i> ".$model->socseti2."</p>";?>
        </div>
        <!--СПЕЦОДЕЖДА-->
        <div class="tab-pane" id="spec" role="tabpanel" style="background-color: white; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, .2);">
            <div class="row">
                <div class="col-lg-2">img</div>
                <div class="col-lg-4">
                    <p>Одежда <?php
                        if($model->sizclothes == '1') echo '44-46 (170-176)';
                        if($model->sizclothes == '2') echo '44-46 (182-188)';
                        if($model->sizclothes == '3') echo '48-50 (170-176)';
                        if($model->sizclothes == '4') echo '48-50 (182-188)';
                        if($model->sizclothes == '5') echo '52-54 (170-176)';
                        if($model->sizclothes == '6') echo '52-54 (182-188)';
                        if($model->sizclothes == '7') echo '56-58 (170-176)';
                        if($model->sizclothes == '8') echo '56-58 (182-188)';
                        ?></p>
                </div>
                <div class="col-lg-2">img</div>
                <div class="col-lg-4">
                    <p>Обувь <?php
                        if($model->sizboots == '1') echo '38р.';
                        if($model->sizboots == '2') echo '39р.';
                        if($model->sizboots == '3') echo '40р.';
                        if($model->sizboots == '4') echo '41р.';
                        if($model->sizboots == '5') echo '42р.';
                        if($model->sizboots == '6') echo '43р.';
                        if($model->sizboots == '7') echo '44р.';
                        if($model->sizboots == '8') echo '45р.';
                        ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

