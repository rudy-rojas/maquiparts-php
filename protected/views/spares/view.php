<?php
/* @var $this SparesController */
/* @var $model Spares */

$this->breadcrumbs=array(
	'Respuestos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Lista de Repuestos', 'url'=>array('index')),
	array('label'=>'Agregar Repuesto', 'url'=>array('create')),
	array('label'=>'Actualizar Repuesto', 'url'=>array('update', 'id'=>$model->idspares)),
	array('label'=>'Eliminar Repuesto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idspares),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Repuesto', 'url'=>array('admin')),
);
?>

<!-- <h1>View Spares #<?php echo $model->idspares; ?></h1> -->
<h2>Repuesto: <?php $model->code; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idspares',
		'location',
		'code',
		'name',
		'size',
		'description',
		'tags',
		'industry',
		'price_start_detail',
		'price_end_detail',
		'price_start_out',
		'price_end_out',
	),
)); ?>
