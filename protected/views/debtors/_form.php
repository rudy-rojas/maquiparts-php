<?php
/* @var $this DebtorsController */
/* @var $model Debtors */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'debtors-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php
date_default_timezone_set('America/La_Paz');

	$fullDate = '';
	$dayText = date('l');
	$dayNumber = date('d');
	$month = date('m');
	if (!isset($model->date)) {
		switch ($dayText) {
			case 'Monday':
				$dayText = 'Lunes';
				break;
			case 'Tuesday':
				$dayText = 'Martes';
				break;
			case 'Wednesday':
				$dayText = "Miercoles";
				break;
			case 'Thursday':
				$dayText = 'Jueves';
				break;
			case 'Friday':
				$dayText = 'Viernes';
				break;
			case 'Saturday':
				$dayText = 'Sabado';
				break;
			default:
				$dayText = 'Domingo';
		}

		switch($month ) {
            case '1':
                $month = 'Enero';
                break;
            case '2':
                $month = 'Febrero';
                break;
            case '3':
                $month = 'Marzo';
                break;
            case '4':
                $month = 'Abril';
                break;
            case '5':
                $month = 'Mayo';
                break;
            case '6':
                $month = 'Junio';
                break;
            case '7':
                $month = 'Julio';
                break;
            case '8':
                $month = 'Agosto';
                break;
            case '9':
                $month = 'Septiembre';
                break;
			case '10':
				$month = 'Octubre';
				break;
			case '11':
				$month = 'Noviembre';
				break;
			default:
				$month = 'Diciembre';
		}


		$fullDate = $dayText . ', ' . $dayNumber . '/' . $month. '/'.date('Y');

	}

	?>


	<div class="form-group">
		<?php echo $form->labelEx($model, 'date'); ?>
		<?php echo $form->textField($model, 'date', array('class' => 'form-control', 'size' => 20, 'maxlength' => 20, 'value' => (isset($model->date) ? $model->date : $fullDate))); ?>
		<?php echo $form->error($model, 'date'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('class' => 'form-control', 'size' => 60, 'maxlength' => 256)); ?>
		<?php echo $form->error($model, 'name'); ?>
	</div>

	<!-- <div class="form-group">
		<?php // echo $form->labelEx($model, 'description'); 
		?>
		<?php // echo $form->textField($model, 'description', array('size' => 60, 'maxlength' => 512)); 
		?>
		<?php // echo $form->error($model, 'description'); 
		?>
	</div> -->




	<div class="form-group">
		<?php echo $form->labelEx($model, 'description'); ?>
		<?php echo $form->textArea($model, 'description', array('maxlength' => 300, 'rows' => '4', 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'description'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'total_debt'); ?>
		<?php echo $form->textField($model, 'total_debt', array('class' => 'form-control', 'size' => 60, 'maxlength' => 256)); ?>
		<?php echo $form->error($model, 'total_debt'); ?>
	</div>
<?php


?>
<!-- <div class="row">
<?php //echo $form->labelEx($model,'item'); ?>
<?php // echo $form->dropDownList($model,'item',$this->get_Estado());?>
<?php // echo $form->error($model,'item'); ?>
</div> -->


	<!-- <div class="form-group">
		<?php //echo $form->labelEx($model, 'status'); ?>
		<?php //echo $form->textField($model, 'status', array('class' => 'form-control', 'size' => 60, 'maxlength' => 256)); ?>
		<?php //echo $form->error($model, 'status'); ?>
	</div> -->

	<div class="form-group">
		<?php echo $form->labelEx($model, 'status'); ?>
		<!-- <?php //echo $form->dropDownList($model, 'status', CHtml::listData(null, array('empty'=>array(NULL=>'slect')) ), array('class' => 'form-control')); ?> -->
		<?php echo $form->dropDownList($model, 'status',  array(''=>array(NULL=>'Seleccione una opcion', 'DEBE'=>'DEBE', 'PAGADO'=>'PAGADO') ), array('class'=>'form-control')); ?>
		<?php echo $form->error($model, 'status'); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model, 'note'); ?>
		<?php echo $form->textField($model, 'note', array('class' => 'form-control', 'size' => 60, 'maxlength' => 512)); ?>
		<?php echo $form->error($model, 'note'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array('class' => 'btn btn-primary')); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->
