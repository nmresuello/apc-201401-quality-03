<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Philippine Air Force Finance Center',

	// preloading 'log' component
	'preload'=>array('log', 
					// 'bootstrap'// preload the bootstrap component
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.rights.*', 
		'application.modules.rights.components.*',
		'application.modules.auditTrail.models.AuditTrail',
		'application.extensions.helpers.XHtml',
		 
		 
	),
	
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'auditTrail'=>array(),
		'mailbox'=>array(  
    'userClass' => 'User',
    'userIdColumn' => 'id',
    'usernameColumn' =>  'username',
	),
		 'forum'=>array(
        'class'=>'application.modules.yii-forum.YiiForumModule',
    ),

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'qwerty',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			
			/**
			'generatorPaths'=>array(
            'bootstrap.gii',
            ),
            */
		),
		
		

		
		
		'rights'=>array(
		'superuserName'=>'Admin', // Name of the role with super user privileges.
		'authenticatedName'=>'Authenticated', // Name of the authenticated user role.
		'userIdColumn'=>'id', // Name of the user id column in the database.
		'userNameColumn'=>'username', // Name of the user name column in the database. 
		'enableBizRule'=>true, // Whether to enable authorization item business rules.
		'enableBizRuleData'=>false, // Whether to enable data for business rules. 
		'displayDescription'=>true, // Whether to use item description instead of name.
		'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages.
		'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages.
		'install'=>false, // Whether to install rights.
		'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested.
		'layout'=>'rights.views.layouts.main', // Layout to use for displaying Rights. 
		'appLayout'=>'application.views.layouts.main', // Application layout.
		'cssFile'=>'rights.css', // Style sheet file to use for Rights.
		'install'=>false, // Whether to enable installer. 
		'debug'=>false, // Whether to enable debug mode.
		),
	
	),

	// application components
	'components'=>array(
		'session'=>array(
			'class'=>'CDbHttpSession',
			/*'autoCreateSessionTable'=>false,
			'connectionID'=>'db',
			'sessionTableName'=>'AfceSessionTable',
			'autoStart'=>false,
			'cookieMode'=>'only',*/


		'timeout'=>300,

		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class'=>'RWebUser',
			
			
		/** 'bootstrap'=>array(
        	'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
        	),
        	*/
		),
		'authManager'=>array( 'class'=>'RDbAuthManager',
		'defaultRoles'=>array('Guest','Authenticated'),
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
		
		// uncomment the following to use a sqlite database
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=paf-fcms',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
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