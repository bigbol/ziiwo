<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1.16/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// define("CSS_URL","http://ziiiwoo-ziiwo.stor.sinaapp.com/assets/css");
// define("IMG_URL","http://ziiiwoo-ziiwo.stor.sinaapp.com/assets/images/");
define("CSS_URL","/assets/css");
define("IMG_URL","/assets/images/");
define("REMOTE_URL","http://ziiiwoo-ziiwo.stor.sinaapp.com");

define("FONTS_URL","/assets/fonts/");
define("LESS_URL","/assets/less/");
define("JS_URL","/assets/js/");

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
