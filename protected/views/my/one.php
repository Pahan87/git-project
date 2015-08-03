<?php

/*foreach($models as $model){
	
	$title = CHtml::encode($model->title);
	//echo $title;
	echo CHtml::link(
		$title,
		array('page/view','id'=>$model->id),
		array('target'=>'_blank','id'=>'my','asd'=>'123')
	);
	echo CHtml::normalizeUrl(array('page/view','id'=>$model->id));
	echo '<hr/>';
}*/
$this->renderPartial('/part/_part',array('models'=>$models));
