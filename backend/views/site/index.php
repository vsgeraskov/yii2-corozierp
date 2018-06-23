<?php

use app\models\People;

/* @var $this yii\web\View */

use app\models\User;

//Переменная содержащая куки

$session = Yii::$app->session;
$session->open();

$this->title = 'Главная страница';

?>

<div class="container-fluid" style="background-color: #fafafa; margin: 0 0 20px 0; padding: 10px;">
    <div class="pull-left">1</div>
    <div class="pull-left">
        <p style="font-family: bebas_neue; font-size: 22pt;">Сегодня именинники</p>
    </div>
</div>

<div class="container-fluid">
    <div class="raw">
        <div class="col-lg-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">93</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">93,139</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">93,139</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <div class="col-lg-3">
            <!-- Apply any bg-* class to to the info-box to color it -->
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text" >Likes</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
            70% Increase in 30 Days
          </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>
    </div>
</div>

<div class="site-index">



    <div class="container-fluid" >

        <?php
        //Проверка на нахождение записи профиля
        if(!People::findOne(Yii::$app->user->id))
        {
            echo "
                <div class=\"alert alert-error\" style=\"padding-right: 15px;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>ВНИМАНИЕ! Отсутствуйет профиль пользователя</strong>
                <br>Ваш профиль пользователя не заполнен, заполните профиль для продолжения работы с системой.
                <br><br>
                <a href=\"" . \yii\helpers\Url ::to(['people/peopleeditform']) . "\" class=\"btn btn-primary btn-lg\" role=\"button\" style=\"text-decoration: none;\">Заполнить профиль</a>
                </div>
                ";
        }

        echo "имя пользователя ".$session->get('io')."<br>";
        echo "код пользователя ".$session->get('userid')."<br>";
        echo "ФИО ".$session->get('fio')."<br>";
        echo "ID пользователя ".$session->get('userpeopleid')."<br>";

        $session->close();



        ?>

        <!--<p class="lead">Как то не совсем правильно называть Вас по логину, заполните резюме и контактный данные</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Начать использовать Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>ФИО </h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>



    </div>
</div>
