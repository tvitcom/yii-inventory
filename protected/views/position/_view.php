<?php
/* @var $this PositionController */
/* @var $data Position */
?>

<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<b><?php echo CHtml::encode($data->name); ?></b>
	<?php echo '('.CHtml::encode($data->emplacement->name).')'; ?>


</div>