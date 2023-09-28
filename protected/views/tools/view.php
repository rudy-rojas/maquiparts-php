<?php
/* @var $this ToolsController */
/* @var $model Tools */

$this->breadcrumbs=array(
	'Tools'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tools', 'url'=>array('index')),
	array('label'=>'Create Tools', 'url'=>array('create')),
	array('label'=>'Update Tools', 'url'=>array('update', 'id'=>$model->id_tools)),
	array('label'=>'Delete Tools', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tools),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tools', 'url'=>array('admin')),
);
?>

<h1>View Tools #<?php echo $model->id_tools; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tools',
		'location',
		'name',
		'code',
		'industry',
		'size',
		'description',
		'lags',
		'price_start_detail',
		'price_end_detail',
		'price_start_out',
		'price_end_out',
	),
)); ?>
