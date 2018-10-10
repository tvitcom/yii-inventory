<?php
/* @var $this LocationController */
/* @var $data Location */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_unofficial')); ?>:</b>
	<?php echo CHtml::encode($data->address_unofficial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gps_coords')); ?>:</b>
	<?php echo CHtml::encode($data->gps_coords); ?>
	<br />


</div>