<?php
/* @var $this DebtorsController */
/* @var $model Debtors */

$this->breadcrumbs=array(
	'Debtors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Debtors', 'url'=>array('index')),
	array('label'=>'Manage Debtors', 'url'=>array('admin')),
);
?>

<h1>Create Debtors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>