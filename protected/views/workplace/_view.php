<?php
/* @var $this WorkplaceController */
/* @var $data Workplace */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emplacement_id')); ?>:</b>
	<?php echo CHtml::encode($data->emplacement_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_num')); ?>:</b>
	<?php echo CHtml::encode($data->work_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>