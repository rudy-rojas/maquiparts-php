<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<section class='icons-menu'>
	<div class="icons-menu__icon">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/spares/create" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/spart-add-hover.svg" width="150" alt="Registrar Repuestos">
			<p>Agregar Repuesto</p>
		</a>

		<a href="<?php echo Yii::app()->request->baseUrl; ?>/machines/create" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/machine-add-hover.svg" width="150" alt="Registrar Repuestos">
			<p>Agregar Maquina</p>
		</a>

		<a href="<?php echo Yii::app()->request->baseUrl; ?>/debtors/create" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/tools.svg" width="150" alt="Registrar Repuestos">
			<p>Agregar Deudor</p>
		</a>

	</div>
	<div class="icons-menu__icon">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/spares/admin" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/spart-search-hover.svg" width="150" alt="Registrar Repuestos">
			<p>Buscar Repuesto</p>
		</a>

		<a href="<?php echo Yii::app()->request->baseUrl; ?>/machines/admin" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/machine-search-hover.svg" width="150" alt="Registrar Repuestos">
			<p>Buscar Maquina</p>
		</a>

		<a href="<?php echo Yii::app()->request->baseUrl; ?>/debtors/admin" class="icon">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/tools.svg" width="150" alt="Registrar Repuestos">
			<p>Buscar Deudor</p>
		</a>

	</div>
</section>