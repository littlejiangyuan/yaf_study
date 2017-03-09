<?php
define('APPLICATION_PATH', dirname(__FILE__));

$app = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");

$app = $app->bootstrap();//默认去application.directory目录下寻找Bootstrap.php文件

$app->run();


