<?php
return [
    'components' => [
        'postgres' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'pgsql:host=127.0.0.1;port=5432;dbname=sharing',
            'username' => 'sharing',
            'password' => 'sharing',
            'charset' => 'utf8',
            'schemaMap' => [
                'pgsql' => [
                    'class' => yii\db\pgsql\Schema::class,
                ]
            ],
            'autoConnect' => false
        ],
        'logs' => [
            'class' => \yii\mongodb\Connection::class,
            'dsn' => 'mongodb://@127.0.0.1:27017/carsharing-logs',
            'options' => [
                "username" => "carsharing",
                "password" => "carsharing"
            ]
        ],
        'mailer' => [
            'class' => yii\swiftmailer\Mailer::class,
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'elasticsearch' => [
            'class' => yii\elasticsearch\Connection::class,
            'nodes' => [
                ['http_address' => '127.0.0.1:9200'],
                // configure more hosts if you have a cluster
            ],
        ],
        'cache' => [
            'class' => yii\redis\Connection::class,
            'hostname' => '127.0.0.1',
            'port' => 6379,
            'database' => 0,
        ],
        'session' => [
            'class' => yii\redis\Connection::class,
            'hostname' => '127.0.0.1',
            'port' => 6379,
            'database' => 1,
        ],
        'events' => [
            'class' => \yii\queue\amqp_interop\Queue::class,
            'host' => '127.0.0.1',
            'port' => 5672,
            'user' => 'guest',
            'password' => 'guest',
            'queueName' => 'carsharing-events',
        ],
        'logs-queue' => [
            'class' => \yii\queue\amqp_interop\Queue::class,
            'host' => '127.0.0.1',
            'port' => 5672,
            'user' => 'guest',
            'password' => 'guest',
            'queueName' => 'carsharing-logs',
        ],
    ],
];
