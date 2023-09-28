<?php
/* @var $this SparesController */
/* @var $model Spares */
/* @var $form CActiveForm */
?>

<div class="bootstrap-dark">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'spares-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="form-group">
		<?php echo $form->labelEx($model, 'location'); ?>
		<?php echo $form->textField($model, 'location', array('class' => 'form-control', 'size' => 60, 'maxlength' => 256)); ?>
		<?php echo $form->error($model, 'location'); ?>
	</div> -->
	
	<div class="form-group">
		<?php echo $form->labelEx($model, 'location'); ?>
		<?php echo $form->textField($model, 'location', array('class' => 'form-control', 'size' => 60, 'maxlength' => 256)); ?>
		<?php echo $form->error($model, 'location'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'code'); ?>
		<?php echo $form->textField($model, 'code', array('class' => 'form-control', 'size' => 60, 'maxlength' => 64, 'value'=> '[new]')); ?>
		<?php echo $form->error($model, 'code'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('class' => 'form-control', 'size' => 60, 'maxlength' => 128)); ?>
		<?php echo $form->error($model, 'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'industry'); ?>
		<?php echo $form->textField($model, 'industry', array('class' => 'form-control', 'size' => 60, 'maxlength' => 128)); ?>
		<?php echo $form->error($model, 'industry'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'size'); ?>
		<?php echo $form->textField($model, 'size', array('class' => 'form-control', 'size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form->error($model, 'size'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'description'); ?>
		<?php echo $form->textField($model, 'description', array('class' => 'form-control', 'size' => 60, 'maxlength' => 256)); ?>
		<?php echo $form->error($model, 'description'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'tags'); ?>
		<?php echo $form->textField($model, 'tags', array('class' => 'form-control', 'size' => 60, 'maxlength' => 256)); ?>
		<?php echo $form->error($model, 'tags'); ?>
	</div>



	<div class="form-group">
		<?php echo $form->labelEx($model, 'price_start_detail'); ?>
		<?php echo $form->textField($model, 'price_start_detail', array('class' => 'form-control', 'size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form->error($model, 'price_start_detail'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'price_end_detail'); ?>
		<?php echo $form->textField($model, 'price_end_detail', array('class' => 'form-control', 'size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form->error($model, 'price_end_detail'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'price_start_out'); ?>
		<?php echo $form->textField($model, 'price_start_out', array('class' => 'form-control', 'size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form->error($model, 'price_start_out'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'price_end_out'); ?>
		<?php echo $form->textField($model, 'price_end_out', array('class' => 'form-control', 'size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form->error($model, 'price_end_out'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array('class' => 'btn btn-primary')); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->
