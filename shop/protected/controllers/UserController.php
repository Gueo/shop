<?php
/**
 * 用户控制器
 */
class UserController extends Controller{
	function actionLogin(){
		//renderPatial()
		$this -> renderPatial('login');
	}
}
