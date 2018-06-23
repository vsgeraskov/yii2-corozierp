<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<section class="content">

    <div class="error-page" style="padding-top: 150px;  ">
        <h2 class="headline text-info">

            <i class="fa fa-warning text-yellow"></i>

        </h2>

        <div class="error-content">
            <h3><?= $name ?></h3>
            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>

            <p>
                Упс. кажется Вы зашли туда куда не стоило заглядывать или сделали то чего не следовало. Если у Вас иное мнение, пожалуйста, сообщите нам. Мы всегода готовы исправить ошибку.
                Зипишите все шаги подробно, для того чтобы мы могли воспроизвести настоящую ошибку.
                <br><br> Ну а пока можете вернуться <a href='<?= Yii::$app->homeUrl ?>'>на главную страницу</a>
            </p>

            <!--<form class='search-form'>
                <div class='input-group'>
                    <input type="text" name="search" class='form-control' placeholder="Search"/>

                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>-->
        </div>
    </div>

</section>
