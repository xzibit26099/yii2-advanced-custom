<?php
$_ENV['YII_SETTINGS'] = \yii\helpers\Json::decode(file_get_contents(dirname(dirname(__DIR__)) . '/settings.json'));

return [
    'name' => 'Кастомное расширенное приложение Yii2',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
        'cache' => [
            'class' => 'yii\redis\Cache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
    ],
    'modules'=>[
        'dynagrid'=>[
            'class'=>'\kartik\dynagrid\Module',
        ],
        'gridview'=>[
            'class'=>'\kartik\grid\Module',
        ],
    ],
];
