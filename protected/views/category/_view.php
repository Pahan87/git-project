<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('pages')); ?>:</b>
	<?php 
            foreach($data->pages as $one){
                
                //echo $one->title;
                echo '<br />';
                echo CHtml::link(CHtml::encode($one->title),array('page/view','id'=>$one->id));
            }
        ?>
	<br />


</div>