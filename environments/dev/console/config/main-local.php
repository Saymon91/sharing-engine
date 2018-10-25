<?php
return [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    'components' => [
        'i18n_db' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'pgsql:host=127.0.0.1;port=5432;dbname=i18n',
            'username' => 'sharing',
            'password' => 'sharing',
            'charset' => 'utf8',
            'schemaMap' => [
                'pgsql' => [
                    'class' => yii\db\pgsql\Schema::class,
                ]
            ],
        ]
    ]
];
