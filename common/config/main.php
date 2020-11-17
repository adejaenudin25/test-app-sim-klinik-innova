<?php

use yii\db\Connection;
use yii\rbac\DbManager;
use yii\caching\FileCache;
use yii\helpers\ArrayHelper;
use modules\main\Module as MainModule;
use modules\users\Module as UserModule;
use modules\rbac\Module as RbacModule;
use modules\master\Module as MasterModule;
use modules\pendaftaran\Module as PendaftaranModule;
use dominus77\maintenance\interfaces\StateInterface;
use dominus77\maintenance\states\FileState;

$params = ArrayHelper::merge(
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'name' => 'Yii2-advanced-start',
    'timeZone' => 'Europe/Moscow',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset'
    ],
    'bootstrap' => [
        'modules\mdokter\Bootstrap',
        'modules\master\Bootstrap',
        'modules\pendaftaran\Bootstrap',
    ],
    'container' => [
        'singletons' => [
            StateInterface::class => [
                'class' => FileState::class,
                'dateFormat' => 'd-m-Y H:i:s',
                'directory' => '@frontend/runtime'
            ]
        ]
    ],
    'modules' => [
        'main' => [
            'class' => MainModule::class
        ],
        'users' => [
            'class' => UserModule::class
        ],
        'rbac' => [
            'class' => RbacModule::class
        ],
        'master' => [
            'class' => MasterModule::class
        ],
        'pendaftaran' => [
            'class' => PendaftaranModule::class
        ],
        'mdokter' => [
            'class' => 'modules\mdokter\Module',
        ],
    ],
    'components' => [
        'db' => [
            'class' => Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=yii2_advanced_start',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
            'enableSchemaCache' => true
        ],
        'authManager' => [
            'class' => DbManager::class
        ],
        'cache' => [
            'class' => FileCache::class,
            'cachePath' => '@frontend/runtime/cache'
        ],
        'mailer' => [
            'useFileTransport' => false
        ],
        'assetManager' => [
            'appendTimestamp' => true,
            'basePath' => '@app/web/assets'
        ]
    ]
];
