<?php
/* @var $this ToolsController */
/* @var $model Tools */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tools-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'industry'); ?>
		<?php echo $form->textField($model,'industry',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'industry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lags'); ?>
		<?php echo $form->textField($model,'lags',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'lags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_start_detail'); ?>
		<?php echo $form->textField($model,'price_start_detail',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'price_start_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_end_detail'); ?>
		<?php echo $form->textField($model,'price_end_detail',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'price_end_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_start_out'); ?>
		<?php echo $form->textField($model,'price_start_out',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'price_start_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_end_out'); ?>
		<?php echo $form->textField($model,'price_end_out',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'price_end_out'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->