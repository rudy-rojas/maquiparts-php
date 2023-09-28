<?php
/* @var $this ToolsController */
/* @var $model Tools */

$this->breadcrumbs=array(
	'Tools'=>array('index'),
	$model->name=>array('view','id'=>$model->id_tools),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tools', 'url'=>array('index')),
	array('label'=>'Create Tools', 'url'=>array('create')),
	array('label'=>'View Tools', 'url'=>array('view', 'id'=>$model->id_tools)),
	array('label'=>'Manage Tools', 'url'=>array('admin')),
);
?>

<h1>Update Tools <?php echo $model->id_tools; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>