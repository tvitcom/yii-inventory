<?php
/* @var $this UnitController */
/* @var $data Unit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utype_id')); ?>:</b>
	<?php echo CHtml::encode($data->utype_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emplacement_id')); ?>:</b>
	<?php echo CHtml::encode($data->emplacement_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_id')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_num')); ?>:</b>
	<?php echo CHtml::encode($data->serial_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventory_num')); ?>:</b>
	<?php echo CHtml::encode($data->inventory_num); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mac_addr')); ?>:</b>
	<?php echo CHtml::encode($data->mac_addr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('main_ipv4')); ?>:</b>
	<?php echo CHtml::encode($data->main_ipv4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('main_ipv6')); ?>:</b>
	<?php echo CHtml::encode($data->main_ipv6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_purchase')); ?>:</b>
	<?php echo CHtml::encode($data->dt_purchase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_endwarranty')); ?>:</b>
	<?php echo CHtml::encode($data->dt_endwarranty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendor_name')); ?>:</b>
	<?php echo CHtml::encode($data->vendor_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documents')); ?>:</b>
	<?php echo CHtml::encode($data->documents); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_broken')); ?>:</b>
	<?php echo CHtml::encode($data->is_broken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('broken_description')); ?>:</b>
	<?php echo CHtml::encode($data->broken_description); ?>
	<br />

	*/ ?>

</div>