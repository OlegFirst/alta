<?php

return [
    'components' => [
        'db' => [
						'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=grnweswb_oleg1',						
            'username' => 'grnweswb_oleg_dbuser',
            'password' => '@NPsE0w1$uiAfg',
            'charset' => 'utf8',
						'enableSchemaCache' => false,
				
            // 'class' => \yii\db\Connection::class,
            // 'dsn' => 'mysql:host=localhost;dbname=alta',						
            // 'username' => 'root',
            // 'password' => '',
            // 'charset' => 'utf8',
						// 'enableSchemaCache' => false
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@common/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
            // You have to set
            //
            // 'useFileTransport' => false,
            //
            // and configure a transport for the mailer to send real emails.
            //
            // SMTP server example:
            //    'transport' => [
            //        'scheme' => 'smtps',
            //        'host' => '',
            //        'username' => '',
            //        'password' => '',
            //        'port' => 465,
            //        'dsn' => 'native://default',
            //    ],
            //
            // DSN example:
            //    'transport' => [
            //        'dsn' => 'smtp://user:pass@smtp.example.com:25',
            //    ],
            //
            // See: https://symfony.com/doc/current/mailer.html#using-built-in-transports
            // Or if you use a 3rd party service, see:
            // https://symfony.com/doc/current/mailer.html#using-a-3rd-party-transport
        ],
    ],
];
