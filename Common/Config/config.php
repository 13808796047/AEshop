<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
$Config = array(
	'DB_DRIVER' => 'mysql',
	
	);
$db = require 'Data/config/db.inc.php';
/**
 * 合并数组
 */
return array_merge($Config,$db);
?>