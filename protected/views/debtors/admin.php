<?php
/* @var $this DebtorsController */
/* @var $model Debtors */

$this->breadcrumbs=array(
	'Deudores'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar deudor', 'url'=>array('index')),
	array('label'=>'Agregar deudor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#debtors-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Buscar deudor</h2>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtors-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_debts',
		'date',
		'name',
		'description',
		'total_debt',
		'status',
		/*
		'note',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
