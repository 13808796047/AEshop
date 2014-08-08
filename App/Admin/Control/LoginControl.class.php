<?php
/**
 * 后台登录页面
 */
Class LoginControl extends Control{
	/**
	 * 显示验证码
	 * @return [type] [description]
	 */
	Public function code(){
		$code = new Code();
		$code->show();
	}
	Public function login(){
		$this -> display();
	}
}