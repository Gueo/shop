<?php 
class IndexController extends Controller{
	function actionHead(){
		$this->renderpartial('head');
	}

	function actionLeft(){
		$this->renderpartial('left');
	}

	function actionRight(){
		$this->renderpartial('right');
	}
}