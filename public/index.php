<?php
date_default_timezone_set('Asia/Shanghai');

error_reporting( E_ALL & ~E_NOTICE );
ini_set('display_errors', '1');

define('APP_PATH', dirname(__FILE__).'/../');
$application = new Yaf_Application( APP_PATH . "/conf/application.ini" );
$application->bootstrap()->run();

?>
