<?php
/* @var $this SparesController */
/* @var $model Spares */

$this->breadcrumbs=array(
	'Spares'=>array('index'),
	$model->name=>array('view','id'=>$model->idspares),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spares', 'url'=>array('index')),
	array('label'=>'Create Spares', 'url'=>array('create')),
	array('label'=>'View Spares', 'url'=>array('view', 'id'=>$model->idspares)),
	array('label'=>'Manage Spares', 'url'=>array('admin')),
);
?>

<h1>Update Spares <?php echo $model->idspares; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>