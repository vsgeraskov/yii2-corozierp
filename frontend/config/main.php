<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'language' => 'ru-RU',
    'id' => 'app-frontend',
    'name' => 'ООО Корози',
    'homeUrl' => 'https://www.corozi.ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                //['class' => 'frontend\components\ClassUrlRule'],
                '' => 'site/index',
                'defaultRoute' => 'site/index',
                '<action:\w+>/' => 'site/<action>',
            ],
        ],
        'mailer' => [  //Настройка отправки почтовых сообщений
            'class' => 'yii\swiftmailer\Mailer',
            //'viewPath' => '@app/mail', //Путь к шаблонам писем
            //'htmlLayout' => 'layouts/main-html', // Шаблон HTML по умолчанию
            //'textLayout' => 'layouts/main-text', // Шаблон TXT по умолчанию
            'messageConfig' => [ //Настройка по умолчанию
                'charset' => 'UTF-8',
                'from' => ['sub@corozi.ru' => '[ COROZI.RU ] Корози, Сервисная Компания'], //Обратный адрес по умолчанию
            ],
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.mail.ru',
                'username' => 'sub@corozi.ru',
                'password' => 'RCv+akWe9e5W',
                'port' => '465',
                'encryption' => 'ssl',
],
        ],
    ],
    'params' => $params,
];
