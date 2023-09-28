<?php
/* @var $this ToolsController */
/* @var $model Tools */

$this->breadcrumbs=array(
	'Tools'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tools', 'url'=>array('index')),
	array('label'=>'Manage Tools', 'url'=>array('admin')),
);
?>

<h1>Create Tools</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>