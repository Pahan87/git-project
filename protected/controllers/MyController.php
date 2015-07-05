<?php

class MyController extends Controller{
	
	public $defaultAction = 'one';
	
	public function actionOne(){
		
		$models=Page::model()->findAll(array('order'=>'title ASC'));
		
		$this->render('one',array('models'=>$models));
	
	}
      //  $models=Page::model()->findAll(array('order'=>'title ASC'));
}