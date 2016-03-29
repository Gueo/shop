<?php 
/**
 * 商城首页
 */
class IndexController extends Controller{
	//展示首页
	function actionIndex(){
	     $this->renderpartial('index');
	}
}