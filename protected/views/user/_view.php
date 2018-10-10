<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass_hash')); ?>:</b>
	<?php echo CHtml::encode($data->pass_hash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass_reset_token')); ?>:</b>
	<?php echo CHtml::encode($data->pass_reset_token); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ava_link')); ?>:</b>
	<?php echo CHtml::encode($data->ava_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_lastlogin')); ?>:</b>
	<?php echo CHtml::encode($data->t_lastlogin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_registered')); ?>:</b>
	<?php echo CHtml::encode($data->t_registered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_key')); ?>:</b>
	<?php echo CHtml::encode($data->auth_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_session_id')); ?>:</b>
	<?php echo CHtml::encode($data->current_session_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	*/ ?>

</div>