<?php
/**
 * 用户控制器
 */
class UserController extends Controller{
	function actionLogin(){
		//renderpartial()		
		$this -> renderpartial('login');
	}
}
