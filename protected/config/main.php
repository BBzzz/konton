<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Kontonline',
	'language' => 'ro',
	'theme'=>'main',
	'homeUrl'=>'site/index',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.modules.admin.models.*',
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'BBzzz1984',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		//uncomment the following if the data server is not in the same location
		/*	
		'localtime'=>array(
   	'class'=>'LocalTime',
   ),*/
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
//				'products/<id:\w+>/*'=>'products/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=konto',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'BBzzz1984',
			'charset' => 'utf8',
		//uncomment the following if the data server is not in the same location
		//'initSQLs'=>array("set time_zone='+02:00';"), 
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
/*			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'info, trace',
					'logFile'=>'infoMessages.log',
				),

				// uncomment the following to show log messages on web pages
/*
				array(
					'class'=>'CWebLogRoute',
				),
*/
//			),
		),
		'authManager'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'y.botond@gmail.com',
	),
);
