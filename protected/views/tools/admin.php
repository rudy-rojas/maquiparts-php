<?php
/* @var $this ToolsController */
/* @var $model Tools */

$this->breadcrumbs=array(
	'Tools'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tools', 'url'=>array('index')),
	array('label'=>'Create Tools', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tools-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tools</h1>

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
	'id'=>'tools-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tools',
		'location',
		'name',
		'code',
		'industry',
		'size',
		/*
		'description',
		'lags',
		'price_start_detail',
		'price_end_detail',
		'price_start_out',
		'price_end_out',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
