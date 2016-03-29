<?php 
/**
 * 商品控制
 */
class GoodsController extends Controller{
	function actionCategory(){
		$this->renderpartial('category');
	}
	function actionDetial(){
		$this->renderpartial('detial');
	}
}