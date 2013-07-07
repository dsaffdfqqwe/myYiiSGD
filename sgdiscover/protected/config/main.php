<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

//Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');


// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log','bootstrap',),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.user.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'appdev0001',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array('bootstrap.gii'),
		),
                'user'=>array(
                    'debug'=>false,
                    ),
		
	),
        //'theme'=>'bootstrap',
	// application components
	'components'=>array(
                /*'urlManager'=>array(
                    'urlFormat'=>'path',
                    'rules'=>array('post/<id:\d+>/<title:.*?>'=>'post/view'),
                    'posts/<tag:.*?>'=>'post/index',
                    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                    ),*/
                'cache' => array('class' => 'system.caching.CDummyCache'),
                'bootstrap'=>array('class'=>'ext.bootstrap.components.Bootstrap','responsiveCss' => true,),
            
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'class'=>'application.modules.user.components.YumWebUser',
                        'allowAutoLogin'=>true,
                        'loginUrl'=>array('//user/user/login'),
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		 */
            
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sgdiscover',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'appdev0001',
			'charset' => 'utf8',
			 'tablePrefix' => '',
                        'enableProfiling'=>true,
                        'enableParamLogging'=>true,
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				/*array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),*/                           
                    array(
                        'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                        'ipFilters'=>array('127.0.0.1'),
                       ),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);