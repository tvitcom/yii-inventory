<?php

// change the following paths if necessary
$yii = dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/yiisoft/yii/framework/yii.php';

if ($_SERVER['DOCUMENT_ROOT'] === '/srv/Sites/company/webroot/app/frontend/old') {
    $config = dirname(__FILE__) . '/protected/config/develop_main.php';
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    // specify how many levels of call stack should be shown in each log message
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
} else {
    $config = dirname(__FILE__) . '/protected/config/production_main.php';
    define('YII_DEBUG', false);
}

require_once($yii);
Yii::createWebApplication($config)->run();
