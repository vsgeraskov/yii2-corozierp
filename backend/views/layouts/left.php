<?php
$session = Yii::$app->session;
$session->open();
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p style="font-size: 10pt;"><?php echo $session->get('name'); $session->close(); ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>

        </div>


        <!-- search form -->
       <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Поиск..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree', 'style' => 'font-size:11pt; font-family: CondLightFree;'],
                'items' => [
                    ['label' => 'Адресная книга', 'icon' => 'address-book', 'url' => ['/gii']],
                    ['label' => 'Контрагенты', 'icon' => 'building-o', 'url' => ['/gii']],
                    ['label' => 'Бухгалтерия', 'icon' => 'usd', 'url' => ['/gii']],
                    ['label' => 'Договора', 'icon' => 'files-o', 'url' => ['/gii']],
                    ['label' => 'Склад', 'icon' => 'dropbox', 'url' => ['/gii']],
                    ['label' => 'Документооборот', 'icon' => 'book', 'url' => '#'],
                    ['label' => 'Охрана труда', 'icon' => 'handshake-o', 'url' => ['/gii']],
                    ['label' => 'Проекты', 'icon' => 'industry', 'url' => ['/debug']],
                    ['label' => 'Проект КАМЕРА', 'icon' => 'flask', 'url' => ['/kamera'], 'visible' => Yii::$app->user->can('razdelProjectKamera')],
                    //['label' => 'Проект АВТОТРАНСПОРТ', 'icon' => 'truck', 'url' => ['/debug']],
                    ['label' => 'Администрирование', 'options' => ['class' => 'header'], 'visible' => Yii::$app->user->can('Administrator')],
                    ['label' => 'Права доступа', 'icon' => 'key', 'url' => '/erp/administration', 'visible' => Yii::$app->user->can('Administrator')],
                    ['label' => 'ЛОГИ', 'icon' => 'file', 'url' => '/erp/administration', 'visible' => Yii::$app->user->can('Administrator')],
                ],
            ]
        ) ?>

    </section>

</aside>
