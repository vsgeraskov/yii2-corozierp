<?php

/* @var $this yii\web\View */

use yii\bootstrap\Carousel;

$this->registerCssFile('/frontend/web/css/font.css');
$this->registerCssFile('/frontend/web/css/sitemain.css');

//Скриптик отложенной загрузки изображения
$this->registerJsFile('@web/js/layzr.js');

$this->title = 'ООО Корози, Компания Промышленного Сервиса г.Пермь, антикоррозионная защита, промышленная очистка, ремонт и восстановление бетонов, теплоизоляция';
?>

<div class="site-index" style="padding: 0px; margin: auto 0px;">
    <?php /*
    $carousel = [
        [
            'content' => '<img src="../../frontend/web/img/slider/004.jpg"/>',
            'caption' => '<h1>Заголовок</h1><p>Какой-то дополнительный текст</p><p><a href="/article/link/1" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
            'options' => ['class' => 'img-fluid']
        ],
        [
            'content' => '<img src="../../frontend/web/img/slider/003.jpg"/>',
            'caption' => '',
            'options' => ['class' => 'img-fluid']
        ],
        [
            'content' => '<img src="../../frontend/web/img/slider/002.jpg"/>',
            'caption' => '',
            'options' => ['class' => 'img-fluid']
        ],
        [
            'content' => '<img src="../../frontend/web/img/slider/001.jpg"/>',
            'caption' => '<h1 style="font-size: 65pt;">Заголовок</h1><p>Какой-то дополнительный текст</p><p><a href="/article/link/1" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
            'options' => ['class' => 'img-fluid']
        ]
    ];

    echo Carousel::widget([
        'items' => $carousel,
        'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
        'controls' => [
            '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
            '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
        ]
    ]);*/
    ?>

    <div class="indextopslide" style="background: url(/frontend/web/img/slider/fonindex.jpg) no-repeat; background-size: cover; background-position: center center;">
        <div class="container inner">
            <h1 class="slederfon">
                Современные технологии промышленного сервиса
            </h1>
            <h2 class="sliderfon">
                РАЗВИТИЕ И ВНЕДРЕНИЕ современных ТЕХНОЛОГИЙ<br>
                ДЛЯ ЗАЩИТЫ ВАШих зданий и сооружений
            </h2>
        </div>
    </div>

    <div class="jumbotron container">
        <table  width="100%" align="center">
            <tr>
                <td align="center" valign="middle" style="padding:30px;"><img data-layzr="../img/zagriv.png" alt=""  width="70px"></td>
            </tr>
        </table>

        <table width="100%" align="center">
            <tr>
                <td align="center" valign="middle" style="padding:0px;">
                    <img data-layzr="../img/zagrivleft.png" alt="" height="35px"><span style="color:black;padding-left: 1px; padding-top: 15px; font-family: HelveticaNeueCyrUltraLight, arial; font-weight: 500; font-size: 32pt;line-height: 1.2; opacity:0.75;">&nbsp;&nbsp;&nbsp;НАМ ДОВЕРЯЮТ&nbsp;&nbsp;&nbsp;</span><img data-layzr="../img/zagrivright.png" alt="" height="35px"></td>
            </tr>
            <tr>
                <td align="center" style="padding:20px;">
                  <?php
                       //вывод изображений из папки закидывай просто картинки в папку
                    $dir = '../../frontend/web/img/logo/'; // Папка с изображениями
                    $cols = 8; // Количество столбцов в будущей таблице с картинками
                    $files = scandir($dir); // Берём всё содержимое директории
                    echo "<table align='center' width='100%'>"; // Начинаем таблицу
                    echo "<tr>"; // Добавляем новую строку
                    echo "<td style='' align='center'>"; // Начинаем столбец
                    $k = 0; // Вспомогательный счётчик для перехода на новые строки
                    for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
                        if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
                            if ($k % $cols == 0)
                                $path = $dir.$files[$i]; // Получаем путь к картинке
                            echo "<img src='$path' alt='' height='37px' style='margin: 8px;'/>"; // Вывод превью картинки
                            /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
                            /*    if ((($k + 1) % $cols == 0) || (($i + 1) == count($files)))
                                  $k++; // Увеличиваем вспомогательный счётчик*/
                        }
                    }
                    echo "</td>"; // Закрываем столбец
                    echo "</tr>";
                    echo "</table>"; // Закрываем таблицу
                    ?>
                 </td>
            </tr>
            <tr>
                <td align="center" style="padding-top:55px;"><img data-layzr="../img/zagrivleft.png" alt="" height="35px"><span style="color:black;padding-left: 1px; padding-top: 15px; font-family: HelveticaNeueCyrUltraLight; font-weight: 500; font-size: 32pt;line-height: 1.2; opacity:0.75;">&nbsp;&nbsp;&nbsp;О НАС ГОВОРЯТ&nbsp;&nbsp;&nbsp;</span><img data-layzr="../img/zagrivright.png" alt="" height="35px"></td>
            </tr>
            <tr>
                <td align="center" style="padding:20px;">
                    <!-- выведем немного отзывов -->
                    <table style="table-layout: fixed; width:100%;">
                        <tr>
                            <td style='padding:15px;'><a href="review.php"><img data-layzr="../img/review/20150115lkmsnab.jpg" alt="" width="270px" class="rev"></a></td>
                            <td style='padding:15px;'><a href="review.php"><img data-layzr="../img/review/20141209tatspecenorgo.jpg" alt="" width="270px" class="rev"></a></td>
                            <td style='padding:15px;'><a href="review.php"><img data-layzr="../img/review/20131024wsk.jpg" alt="" width="270px" class="rev"></a></td>
                            <td style='padding:15px;'><a href="review.php"><img data-layzr="../img/review/20141002metafrax.jpg" alt="" width="270px" class="rev"></a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <h1>Поздравляем</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content container">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

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

<!--активация отложенного изображения-->
<script type="text/javascript">
    var layzr = new Layzr();
</script>