<?php
/* @var $this SoftwareController */
/* @var $data Software */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_link')); ?>:</b>
	<?php echo CHtml::encode($data->upload_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_platform')); ?>:</b>
	<?php echo CHtml::encode($data->work_platform); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('license_type')); ?>:</b>
	<?php echo CHtml::encode($data->license_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('license_text')); ?>:</b>
	<?php echo CHtml::encode($data->license_text); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('our_license_key')); ?>:</b>
	<?php echo CHtml::encode($data->our_license_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_start')); ?>:</b>
	<?php echo CHtml::encode($data->t_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_end')); ?>:</b>
	<?php echo CHtml::encode($data->t_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_licensed')); ?>:</b>
	<?php echo CHtml::encode($data->is_licensed); ?>
	<br />

	*/ ?>

</div>