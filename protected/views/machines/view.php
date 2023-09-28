<?php
/* @var $this MachinesController */
/* @var $model Machines */

$this->breadcrumbs=array(
	'Machines'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Machines', 'url'=>array('index')),
	array('label'=>'Create Machines', 'url'=>array('create')),
	array('label'=>'Update Machines', 'url'=>array('update', 'id'=>$model->id_machines)),
	array('label'=>'Delete Machines', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_machines),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Machines', 'url'=>array('admin')),
);
?>

<h1>View Machines #<?php echo $model->id_machines; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_machines',
		'location',
		'name',
		'industry',
		'code',
		'description',
		'tags',
		'price_start_detail',
		'price_end_detail',
		'price_start_out',
		'price_end_out',
	),
)); ?>
