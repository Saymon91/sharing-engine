<?php

$config = [
    'components' => [
        'events' => [
            'client-created' => [
                [
                    'handler' => \background\models\clients\Client,
                    'args' => ['params.id']
                ]
            ],
            'client-first-login' => [
                [

                ]
            ],
            'client-updated' => [
                [

                ]
            ]
        ]
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => 'yii\debug\Module',
//    ];
//
//    $config['bootstrap'][] = 'gii';
//    $config['modules']['gii'] = [
//        'class' => 'yii\gii\Module',
//    ];
}

return $config;
