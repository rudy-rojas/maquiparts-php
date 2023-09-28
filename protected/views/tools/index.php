<?php
/* @var $this ToolsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tools',
);

$this->menu=array(
	array('label'=>'Create Tools', 'url'=>array('create')),
	array('label'=>'Manage Tools', 'url'=>array('admin')),
);
?>

<h1>Tools</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
