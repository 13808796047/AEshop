<?php
if (!defined("HDPHP_PATH"))
	exit ;
	/**
 * HDCMS缓存函数
 * @param String $name 缓存KEY
 * @param bool $value 删除缓存
 * @return bool
 */
function cache($name, $value = false, $CachePath = 'Data/cache/Data') {
	
	if ($value === false) {
		return F($name, false, $CachePath);
	} else {
		return F($name, $value, $CachePath);
	}
}