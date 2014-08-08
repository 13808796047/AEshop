<?php
//标准时区
date_default_timezone_set('PRC');
//开启调试模式
define('DEBUG',true);
//应用分组目录
define('GROUP_PATH','./');
//编译文件目录
define('TEMP_PATH','temp/');
//入口文件
require 'HDPHP/hdphp/hdphp.php';
