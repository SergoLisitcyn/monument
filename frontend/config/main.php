<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'homeUrl' => '/',
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'view' => [
            'theme' => [

                'pathMap' => [
                    '@app/views' => '@app/views',
                    '@app/widgets' => '@app/widgets',
                ],

            ],
//            'mailer' => [
//                'class' => 'yii\swiftmailer\Mailer'
//            ]
        ],

        'request' => [
            'baseUrl' => '',
            'enableCsrfValidation'=>false,
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
                '/' => '/site/index',
                'gravirovka' => '/site/gravirovka',
                'type-stone' => 'site/type-stone',
                'contact' => 'site/contact',
                [
                    'pattern' => 'site/<url:\S+>',
                    'route' => '/site/gallery',
                    'defaults' => ['url' => 'error']
                ],
                'image' => 'yii2images/images/image-by-item-and-alias',

            ],
        ],

        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => '6LcDBE4aAAAAAKYO7sQ1NUd8G2rEJc9MDTJ_ceh5',
            'secret' => '6LcDBE4aAAAAABV5_aub9vSAJgA9hvbfVNDBtqhn',
        ],

    ],
    'params' => $params,
];
