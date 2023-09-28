<?php
/* @var $this SparesController */
/* @var $model Spares */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Listar respuestos', 'url'=>array('index')),
	array('label'=>'Administrar repuestos', 'url'=>array('admin')),
);
?>

<h2>Agregar repuesto</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>