<?php
/* @var $this DebtorsController */
/* @var $model Debtors */

$this->breadcrumbs=array(
	'Debtors'=>array('index'),
	$model->name=>array('view','id'=>$model->id_debts),
	'Update',
);

$this->menu=array(
	array('label'=>'List Debtors', 'url'=>array('index')),
	array('label'=>'Create Debtors', 'url'=>array('create')),
	array('label'=>'View Debtors', 'url'=>array('view', 'id'=>$model->id_debts)),
	array('label'=>'Manage Debtors', 'url'=>array('admin')),
);
?>

<h1>Update Debtors <?php echo $model->id_debts; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>