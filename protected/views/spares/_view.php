<?php
/* @var $this SparesController */
/* @var $data Spares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idspares')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idspares), array('view', 'id'=>$data->idspares)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('industry')); ?>:</b>
	<?php echo CHtml::encode($data->industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_start_detail')); ?>:</b>
	<?php echo CHtml::encode($data->price_start_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_end_detail')); ?>:</b>
	<?php echo CHtml::encode($data->price_end_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_start_out')); ?>:</b>
	<?php echo CHtml::encode($data->price_start_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_end_out')); ?>:</b>
	<?php echo CHtml::encode($data->price_end_out); ?>
	<br />

	*/ ?>

</div>