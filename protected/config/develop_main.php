<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => Yii::t('site', 'Inventory and equipment management'),
    'language' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2),
    //'sourceLanguage' => 'ru-RU',
    'defaultController' => 'site/index',
    //'theme' => 'chat',
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'generatorPaths' => array(
                'application.gii',
            ),
            'password' => 'pass_to_provision',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'session' => array(
            'timeout' => 6400,
        ),
        'request' => array(
            'class' => 'application.components.HttpRequest',
            'enableCsrfValidation' => true,
            'enableCookieValidation' => true,
            'csrfTokenName' => 'gws-origin'
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager' => array(
          'urlFormat' => 'path',
          'rules' => array(
          '<controller:\w+>/<id:\d+>' => '<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
          '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
          ),
          'showScriptName' => false,
          ),
         */
        // database settings are configured in database.php
        'db' => require(dirname(__FILE__) . '/develop_database.php'),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => YII_DEBUG ? null : 'site/error',
        ),
    /*
      'log' => array(
      'class' => 'CLogRouter',
      'routes' => array(
      array(
      'class' => 'CWebLogRoute',
      //'levels' => 'error, system, warning, trace, profile, info',
      ),
      array(
      'class' => 'CProfileLogRoute',
      ),
      ),
      ), */
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'permanentAppKey' => 'f0950701',
        'test' => array(
            '1' => 'Значение 1',
            '2' => 'Значение 2'
        ),
    ),
    //'onBeginRequest' => create_function('$event', 'return ob_start("ob_gzhandler");'),
    // 'onEndRequest' => create_function('$event', 'return ob_end_flush();'),
);
