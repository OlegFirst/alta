<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
		// 'homeUrl' => '/admin',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
				'request' => [
						// Hosting
						// 'baseUrl' => '/',
				
						'baseUrl' => '/admin',
				],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
						'rules' => [
							'admin' => 'site/admin',
							'blog' => 'blog',
							// '<script>' => 'site/<script>'
            ],
				],
				'urlManagerFrontend' => [
						'class' => 'yii\web\urlManager',
						'baseUrl' => '../../frontend/web/',
						'enablePrettyUrl' => true,
            'showScriptName' => false,
				],
				'menu' => [
						'class' => 'app\components\Menu'
				],
    ],
    'params' => $params,
];