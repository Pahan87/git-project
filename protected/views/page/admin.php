<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление страницами</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                    'class'=>'CCheckBoxColumn',
                    'id'=>'checked',
                    'selectableRows'=>2,
                ),
                array(
                   'name'=>'id',
                   'header'=>'Айди',
                   'headerHtmlOptions'=>array('width'=>30),
                   'value'=>'$data->id',
                   'htmlOptions'=>array('class'=>'my1'),
                   'cssClassExpression'=>'($data->id>5)?"my2":""',
                ),
		'title',
		'text',
		array(
			'class'=>'CButtonColumn',
                        'headerHtmlOptions'=>array('width'=>100),
                        //'deleteButtonOptions'=>array('style'=>"display:none"),
                        //'deleteButtonLabel'=>'Elfkbnm',
                        'template'=>'{preview}{view}{update}{delete}',
                        'buttons'=>array(
                            'preview' => array(
                            'label'=>'ertertert',     // text label of the button
                            'url'=>'"index.php?r=page/view&id=".$data->id',       // a PHP expression for generating the URL of the button
                            'imageUrl'=>'/assets/b20321db/gridview/delete.png',  // image URL of the button. If not set or false, a text link is used
                           // 'options'=>array(), // HTML options for the button tag
                            //'click'=>'alert("Удалено")',     // a JS function to be invoked when the button is clicked
                            //'visible'=>'',   // a PHP expression for determining whether the button is visible
                           ) 
                        ),
		),
               
	),
)); ?>
