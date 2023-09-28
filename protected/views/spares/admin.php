<?php
/* @var $this SparesController */
/* @var $model Spares */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de repuestos', 'url'=>array('index')),
	array('label'=>'Agregar Repuesto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#spares-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Administrar Repuestos</h2>
<!-- 
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
	 'model'=>$model,
 )); 
?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'spares-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idspares',
		'location',
		'code',
		'name',
		'size',
		'description',
		'tags',
		'industry',
		'price_start_detail',
		'price_end_detail',
		'price_start_out',
		// 'price_end_out',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
