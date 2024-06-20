<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
		// TO DO: remove
		//'homeUrl' => '/alta',
		'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
						// Hosting
						// 'baseUrl' => '/',
						
						'baseUrl' => '/alta',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
						'enableSession' => true,
        ],
        'session' => [
            'name' => 'advanced-frontend',
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
							'blog' => '/blog',
							'<script>' => '/site/<script>'
            ],
        ],
				'FrontendUser' => [
						'class' => 'app\components\FrontendUser'
				],
				'menu' => [
						'class' => 'app\components\Menu'
				],
				'cabinetMenu' => [
						'class' => 'app\components\CabinetMenu'
				],
				'CustomCookies' => [
						'class' => 'app\components\CustomCookies'
				],
    ],
    'params' => $params,
];
