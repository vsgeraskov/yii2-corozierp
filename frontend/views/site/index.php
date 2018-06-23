<?php

/* @var $this yii\web\View */

$this->title = 'ООО Корози, Компания Промышленного Сервиса г.Пермь, антикоррозионная защита, промышленная очистка, ремонт и восстановление бетонов, теплоизоляция';

?>

<div class="site-index">
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
                <td align="center" valign="middle" style="padding:30px;"><img src="../../frontend/web/img/zagriv.png" alt=""  width="70px"></td>
            </tr>
        </table>

        <table width="100%" align="center">
            <tr>
                <td align="center" valign="middle" style="padding:0px; text-align: center; vertical-align: middle;">
                    <img src="../../frontend/web/img/zagrivleft.png" alt="" height="35px"><span style="color:black; padding-left: 1px; font-family: HelveticaNeueCyrUltraLight, arial; font-weight: 500; font-size: 34pt; line-height: 1.2; opacity:0.75; vertical-align: middle;">&nbsp;&nbsp;&nbsp;НАМ ДОВЕРЯЮТ&nbsp;&nbsp;&nbsp;</span><img src="../../frontend/web/img/zagrivright.png" alt="" height="35px"></td>
            </tr>
            <tr>
                <td align="center" style="padding:20px;">
                  <?php
                       //вывод изображений из папки закидывай просто картинки в папку
                    $dir = '../../frontend/web/img/logo/'; // Папка с изображениями логотипы компаний
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
                <td align="center" style="padding-top:55px;">
                    <img src="../../frontend/web/img/zagrivleft.png" alt="" height="35px"><span style="color:black;padding-left: 1px; padding-top: 15px; font-family: HelveticaNeueCyrUltraLight; font-weight: 500; font-size: 32pt;line-height: 1.2; opacity:0.75; vertical-align: middle;">&nbsp;&nbsp;&nbsp;О НАС ГОВОРЯТ&nbsp;&nbsp;&nbsp;</span><img src="../../frontend/web/img/zagrivright.png" alt="" height="35px"></td>
            </tr>
            <tr>
                <td align="center" style="padding:20px;">
                    <!-- выведем немного отзывов -->
                    <table style="table-layout: fixed; width:100%;">
                        <tr>
                            <td style='padding:15px; text-align: center;'><a href="<?= \yii\helpers\Url::to(['/review']) ?>"><img src="../../frontend/web/img/review/20150115lkmsnab.jpg" alt="" width="210px" class="rev"></a></td>
                            <td style='padding:15px; text-align: center;'><a href="<?= \yii\helpers\Url::to(['/review']) ?>"><img src="../../frontend/web/img/review/20141209tatspecenorgo.jpg" alt="" width="210px" class="rev"></a></td>
                            <td style='padding:15px; text-align: center;'><a href="<?= \yii\helpers\Url::to(['/review']) ?>"><img src="../../frontend/web/img/review/20131024wsk.jpg" alt="" width="210px" class="rev"></a></td>
                            <td style='padding:15px; text-align: center;'><a href="<?= \yii\helpers\Url::to(['/review']) ?>"><img src="../../frontend/web/img/review/20141002metafrax.jpg" alt="" width="210px" class="rev"></a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</div>
