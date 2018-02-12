<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false,
                'enableStrictParsing' => false,
                'rules' => [
                      '<controller:\w+>/<id:\d+>' => '<controller>/view',
                      '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                      '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                      'http://<user:\w+>.example.com/<lang:\w+>/profile' => 'user/profile',
                      'defaultRoute' => '/site/index',
                ],
        ],
    ],
];
