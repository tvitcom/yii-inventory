<?php
/* @var $this DutyController */
/* @var $data Duty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibility')); ?>:</b>
	<?php echo CHtml::encode($data->responsibility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('with_team_id')); ?>:</b>
	<?php echo CHtml::encode($data->with_team_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_id')); ?>:</b>
	<?php echo CHtml::encode($data->position_id); ?>
	<br />


</div>