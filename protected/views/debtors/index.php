<?php
/* @var $this DebtorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Deudores',
);

$this->menu=array(
	array('label'=>'Agregar deudor', 'url'=>array('create')),
	array('label'=>'Buscar deudor', 'url'=>array('admin')),
);
?>

<h2>Deudores</h2>
<section class='icons-menu'>
	<div class="icons-menu__icon">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/debtors/create" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/tools.svg" width="150" alt="Registrar Repuestos">
			<p>Agregar Deudor</p>
		</a>
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/debtors/admin" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/tools.svg" width="150" alt="Registrar Repuestos">
			<p>Buscar Deudor</p>
		</a>
	</div>


	</div>
</section>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
