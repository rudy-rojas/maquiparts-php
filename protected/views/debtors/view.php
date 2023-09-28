<?php
/* @var $this DebtorsController */
/* @var $model Debtors */

$this->breadcrumbs=array(
	'Debtors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Debtors', 'url'=>array('index')),
	array('label'=>'Create Debtors', 'url'=>array('create')),
	array('label'=>'Update Debtors', 'url'=>array('update', 'id'=>$model->id_debts)),
	array('label'=>'Delete Debtors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_debts),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Debtors', 'url'=>array('admin')),
);
?>

<h2>Nombre deudor: <?php echo $model->name; ?> </h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_debts',
		'date',
		'name',
		'description',
		'total_debt',
		'status',
		'note',
	),
)); ?>
