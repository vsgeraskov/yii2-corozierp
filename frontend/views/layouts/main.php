<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use rmrevin\yii\fontawesome\FA;

/* Подключение шрифта FontAwesome */
rmrevin\yii\fontawesome\AssetBundle::register($this);
AppAsset::register($this);

/* Подключение прогрессбара */
use phpnt\pace\PaceAsset;
PaceAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii ::$app->language ?>" xmlns:text-color="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

 <!--Прогрессбар загрузки страницы-->
<div class="pace pace-inactive"">
    <div class="pace-progress" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>

<!-- Иконка обратного звонка -->
<a href="contactform" id="popup__toggle">
    <div class="circlephone" style="transform-origin: center;"></div>
    <div class="circle-fill" style="transform-origin: center;"></div>
    <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;"></div>
    </div>
</a>


<div class="wrap">
    <!--<div style="width: 1200px; margin: 0 auto;">
        <table width="100%" style="height:25px; vertical-align: middle; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 9pt;">
                <tr>
                    <td align="left" valign="middle" style="padding-left: 10px;">
				        <span style="color:black; padding: 0px; font-family: thoma, arial; font-weight: normal; font-size: 9pt;">
				        <a href="https://biz.mail.ru/login/corozi.ru"><img src="../img/envelope.png" alt="Адрес" height="12px" style="opacity: 0.65;"></a>&nbsp;&nbsp;&nbsp;
				        <a href="<?php /*/*echo Url::toRoute(['/erp']);*/?>"><img src="../img/loginicon.png" alt="Адрес" height="12px" style="opacity: 0.95;"></a>&nbsp;&nbsp;&nbsp;
                    </td>

                    <td align="left" valign="middle" style="padding: 0px;">
                        <img src="../img/checkin.png" alt="Адрес" height="10px" style="opacity: 0.65;">&nbsp;г.Пермь ул.Буксирная д.4&nbsp;&nbsp;&nbsp;
                        <img src="../img/envelope.png" alt="Электронная почта" height="10px" style="opacity: 0.65;"> &nbsp; info@corozi.ru &nbsp;&nbsp;&nbsp;
                        <img src="../img/phonealt.png" alt="Телефон Факс" height="10px" style="opacity: 0.65;">&nbsp; (342) 217-90-70, 247-65-71	 &nbsp;&nbsp;&nbsp;
                    </td>

                    <td align="left" valign="middle" style="padding: 0px; text-align: right;">
                        <img src="../img/checkin.png" alt="Адрес" height="10px">&nbsp;ЗАЯВКА НА РАССЧЕТ&nbsp;&nbsp;&nbsp;
                    </td>

                    <td align="right" valign="middle" style="padding-right: 10px;">
                        <a href="https://vk.com/public56011242" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='/img/vkcolor.png'" onmouseout="this.src='/img/vkblack.png'" src="/img/vkblack.png"></a>&nbsp;&nbsp;
                        <a href="https://www.instagram.com/corozi/" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='/img/instagramblack.png'" onmouseout="this.src='/img/instagramblack.png'" src="/img/instagramblack.png"></a>&nbsp;&nbsp;
                        <a href="https://twitter.com/corozi_perm/" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='/img/twittercolor.png'" onmouseout="this.src='/img/twitterblack.png'" src="/img/twitterblack.png"></a>&nbsp;&nbsp;
                        <a href="https://www.youtube.com/channel/UCuvvWkLQb745c6QHw4NuHmw" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='/img/youtubecolor.png'" onmouseout="this.src='/img/youtubeblack.png'" src="/img/youtubeblack.png"></a>&nbsp;&nbsp;
          -->              <!--<a href="https://plus.google.com/+%D0%9E%D0%9E%D0%9E%D0%9A%D0%9E%D0%A0%D0%9E%D0%97%D0%98%D0%9F%D0%B5%D1%80%D0%BC%D1%8C" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='/img/gcolor.png'" onmouseout="this.src='/img/gblack.png'" src="/img/gblack.png"></a>&nbsp;&nbsp;-->
                        <!--<a href="https://запискикоррозиониста.рф/" target="_blank"><img style="opacity: 0.6; height: 12px;" onmouseover="this.src='/img/ljcolor.png'" onmouseout="this.src='/img/ljblack.png'" src="/img/ljblack.png"></a>&nbsp;&nbsp;
                    </td>
                </tr>
            </table>
    </div>-->

    <?php
  NavBar::begin([
        'brandLabel' => '<img src="../../frontend/web/img/logotype50.png" style="display:inline; margin-top: 0px; vertical-align: top; height: 36px;">',
        'brandOptions' => ['style' => 'margin: 0px; padding: 0px; display:inline; margin-top: 6px; vertical-align: middle; height: 32px;'],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default',
            'style' => 'margin: 0px; padding: 0px; background-color:#fff; font-family: CondLightFree; color:#00000; font-size:14pt;', //Задаем принудительно стили
        ]
    ]);
    $menuItems = [
        ['label' => 'Компания', 'options' => ['class' => 'dropdown'], 'items'=>[
            ['label' => 'Наша компания', 'url' => ['/about'],'options' => ['id' => 'wn_history']],
            ['label' => 'Наша команда', 'url' => ['/ourteam'],'options' => ['id' => 'wn_history']],
            ['label' => 'Миссия', 'url' => ['/about#mission'],'options' => ['id' => 'wn_history']],
            ['label' => 'Аккредитация', 'url' => ['/akkredit'],'options' => ['id' => 'wn_history']],
            ['label' => 'Аттестация СУОТ', 'url' => ['/suot'],'options' => ['id' => 'wn_history']],
            ['label' => 'Отзывы клиентов', 'url' => ['/review'],'options' => ['id' => 'wn_history']],
            ['label' => 'Ресурсы компании', 'url' => ['/resources'],'options' => ['id' => 'wn_history']],
            ]
        ],
        ['label' => 'Услуги', 'options' => ['id' => 'down_history'], 'items'=>[
            ['label' => 'Промышленная очистка', 'url' => ['/promcleaner'],'options' => ['id' => 'wn_history']],
            ['label' => 'Антикоррозионная защита', 'url' => ['/anticor'],'options' => ['id' => 'wn_history']],
            ['label' => 'Огнезащита конструкций', 'url' => ['/fireprotection'],'options' => ['id' => 'wn_history']],
            ['label' => 'Ремонт и восстановление бетонов', 'url' => ['/beton'],'options' => ['id' => 'wn_history']],
            //['label' => 'Теплоизоляция оборудования', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Изготовление металлоконструкций', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Промышленный альпинизм', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Инспекционный контроль', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
            //['label' => 'Обследование пром.объектов', 'url' => ['/site/event'],'options' => ['id' => 'wn_history']],
        ]

        ],

        ['label' => 'Объекты', 'url' => ['/object']],
       // ['label' => 'Контрагентам', 'url' => ['/site/contact']],
        ['label' => 'Вакансии', 'url' => ['/job']],
        ['label' => 'Контакты', 'url' => ['/site/contact']],
        //['label' => '<strong>+7 342 217-90-70</strong><span class="btn btn-primary btn-sm" ">напишите нам</span>'],
    ];

    /* менюшка доступа к email и erp */
    /*echo Nav::widget([
        'encodeLabels' => false,
        'options' => ['class' => 'navbar-nav navbar-right', 'style' => ''],
        /*'items' => [
            ['label' => '|'],
            ['label' => FA::icon('envelope-o'), 'url' => 'https://biz.mail.ru/login/corozi.ru'],
            ['label' => FA::icon('user-o'), 'url' => ['/erp/']],
        ],*/
    /*]);*/

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right', 'style' => 'weight: 800;'],
        'encodeLabels' => false,
        'items' => $menuItems,
    ]);

    NavBar::end();

    ?>

    <div class="">
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>  <!--Виджет выводит информацию путь в верху-->
        <?= Alert::widget() ?> <!--Выводит сообщение ошибки, предупреждения-->
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container" style="padding-bottom: 25px;">
        <div class="row">
            <div class="col-sm-5">
                <!--<img src="../img/logotype50.png">-->
                <br>
                <table>
                    <tr>
                        <td style="vertical-align: middle;"><img src="../img/icon/checkin.png" style="padding-left:20px; padding-right: 15px;"></td>
                        <td><p style="font-size: 14pt;">614023, РФ, Пермский край, г.Пермь, ул.Буксирная д.4</p></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;"><img src="../img/icon/icon-callalt.png" style="padding-left:20px; padding-right: 15px;"></td>
                        <td><p style="font-size: 14pt;">+7 (342) 217-90-70 <br>+7 (342) 247-65-71</p></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;"><img src="../img/icon/envelope.png" style="padding-left:20px; padding-right: 15px;"></td>
                        <td><p style="font-size: 14pt;">info@corozi.ru</p></td>
                    </tr>
                </table>
                <!--Другие контакты ... -->
            </div>
            <div class="col-sm-2">
                <h2 class="uslugi"></h2>
            </div>
            <div class="col-sm-2">
                <h2 class="uslugi">Компания</h2>
                <a href=<?php echo Url::toRoute(['/ourteam']);?> class="bottommenu"><h5>Наша команда</h5></a>
                <a href=<?php echo Url::toRoute(['/akkredit']);?> class="bottommenu"><h5>Лицензии & Допуски</h5></a>
                <a href=<?php echo Url::toRoute(['/object']);?> class="bottommenu"><h5>Реализованные проекты</h5></a>
                <a href=<?php echo Url::toRoute(['/review']);?> class="bottommenu"><h5>Отзывы клиентов</h5></a>
                <a href=<?php echo Url::toRoute(['/resources']);?> class="bottommenu"><h5>Ресурсы компании</h5></a>
            </div>
            <div class="col-sm-3">
                <h2 class="uslugi">Услуги</h2>
                <a href=<?php echo Url::toRoute(['/promcleaner']);?> class="bottommenu"><h5>Промышленная очистка</h5></a>
                <a href=<?php echo Url::toRoute(['/anticor']);?> class="bottommenu"><h5>Антикоррозионная защита</h5></a>
                <a href=<?php echo Url::toRoute(['/fireprotection']);?> class="bottommenu"><h5>Огнезащита конструкций</h5></a>
                <a href=<?php echo Url::toRoute(['/beton']);?> class="bottommenu"><h5>Восстановление бетонов</h5></a>

                <!-- <h5>Теплоизоляция оборудования</h5>
                <h5>Промышленный альпинизм</h5>
                <h5>Изготовление металлоконструкций</h5>
                <h5>Инспекционный контроль</h5>
                <h5>Обследование пром.объектов</h5>
                <h5>Аренда спецтехники</h5>
            -->
            </div>

        </div>
    </div>

    <!--Нижний футер-->
    <div class="container" style="padding-top: 15px; border-top: 1px solid #e0e0e0;">
        <p class="pull-left" style="font-size: 8pt;">
            &copy; 2013 - <?= date('Y') ?> ООО "Корози", Компания Промышленного Сервиса<br>
            Публикация материалов сайта без письменного согласия ООО "Корози" запрещена.<br><br>
            Вся размещенная информация представленна в ознокомительных целях и не являются публичной <br>
            офертой согласно Гражданскому кодексу РФ, части 1, статьи 435. Для подробной информацией <br>
            обращайтесь к менеджера компании.
            <br><br>
            Политика обработки персональных данных
            <br><br>
        </p>

        <p class="pull-right" style="text-align: right;">
            <a href="https://www.instagram.com/corozi/" target="_blank"><img src="../img/social/instagramsmalcolor.png" style="padding: 5px;"></a>
            <a href="https://vk.com/public56011242" target="_blank"><img src="../img/social/vk2.png" style="padding: 5px;"></a>
            <a href="https://запискикоррозиониста.рф/" target="_blank"><img src="../img/social/livejournal3.png" style="padding: 5px;"></a>
            <a href="https://www.youtube.com/channel/UCuvvWkLQb745c6QHw4NuHmw" target="_blank"><img src="../img/social/youtube3.png" style="padding: 5px;"></a>
            <a href="https://twitter.com/corozi_perm/" target="_blank"><img src="../img/social/twitter.png" style="padding: 5px;"></a>
            <a href="https://biz.mail.ru/login/corozi.ru" target="_blank"><img src="../img/social/emailicon.png" style="padding: 5px;"></a>
            <!--<a href="<?php /*echo Url::toRoute(['/erp']); */?>"><img src="../img/social/keyicon.png" style="padding: 5px;"></a>-->
            <a href="http://crm.corozi.ru"><img src="../img/social/keyicon.png" style="padding: 5px;"></a>

            <br>
            <br>

            <!--LiveInternet counter--><script type="text/javascript"><!--
                document.write("<a href='http://www.liveinternet.ru/click' "+
                    "target=_blank><img src='//counter.yadro.ru/hit?t14.6;r"+
                    escape(document.referrer)+((typeof(screen)=="undefined")?"":
                        ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                    ";"+Math.random()+
                    "' alt='' title='LiveInternet: показано число просмотров за 24"+
                    " часа, посетителей за 24 часа и за сегодня' "+
                    "border='0' width='88' height='31'><\/a>")
                //--></script><!--/LiveInternet-->

            <!-- Rating@Mail.ru counter -->
            <script type="text/javascript">//<![CDATA[
                var _tmr = _tmr || [];
                _tmr.push({id: "2427126", type: "pageView", start: (new Date()).getTime()});
                (function (d, w) {
                    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
                    ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
                    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
                })(document, window);
                //]]></script><noscript><div style="position:absolute;left:-10000px;">
                <img src="//top-fwz1.mail.ru/counter?id=2427126;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
            </div></noscript>
        <!-- //Rating@Mail.ru counter -->
        <!-- Rating@Mail.ru logo -->
        <a href="http://top.mail.ru/jump?from=2427126">
            <img src="//top-fwz1.mail.ru/counter?id=2427126;t=442;l=1"
                 style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
        <!-- //Rating@Mail.ru logo -->

        <!--Google Analitycs -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-45847417-1', 'corozi.ru');
            ga('send', 'pageview');
        </script>

        <!--Google Analitycs -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-63966626-1', 'auto');
            ga('send', 'pageview');

        </script>

        <!-- Yandex.Metrika informer -->
        <a href="http://metrika.yandex.ru/stat/?id=23064844&amp;from=informer"
           target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23064844/3_0_E0E0E0FF_C0C0C0FF_0_pageviews"
                                               style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23064844,lang:'ru'});return false}catch(e){}"/></a>
        <!-- /Yandex.Metrika informer -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter23064844 = new Ya.Metrika({id:23064844,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true});
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="//mc.yandex.ru/watch/23064844" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?/*= Yii::powered() */?>