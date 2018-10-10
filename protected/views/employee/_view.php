<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position_id')); ?>:</b>
	<?php echo CHtml::encode($data->position_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_start')); ?>:</b>
	<?php echo CHtml::encode($data->t_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_end')); ?>:</b>
	<?php echo CHtml::encode($data->t_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_reason')); ?>:</b>
	<?php echo CHtml::encode($data->end_reason); ?>
	<br />


</div>