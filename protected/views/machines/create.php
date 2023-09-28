<?php
/* @var $this MachinesController */
/* @var $model Machines */

$this->breadcrumbs=array(
	'Machines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Machines', 'url'=>array('index')),
	array('label'=>'Manage Machines', 'url'=>array('admin')),
);
?>

<h2>Agregar maquina</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>