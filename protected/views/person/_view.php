<?php
/* @var $this PersonController */
/* @var $data Person */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_birthday')); ?>:</b>
	<?php echo CHtml::encode($data->t_birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ident_code')); ?>:</b>
	<?php echo CHtml::encode($data->ident_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_data')); ?>:</b>
	<?php echo CHtml::encode($data->passport_data); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('address_data')); ?>:</b>
	<?php echo CHtml::encode($data->address_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_link')); ?>:</b>
	<?php echo CHtml::encode($data->photo_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_data')); ?>:</b>
	<?php echo CHtml::encode($data->contact_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_enterpreneur')); ?>:</b>
	<?php echo CHtml::encode($data->is_enterpreneur); ?>
	<br />

	*/ ?>

</div>