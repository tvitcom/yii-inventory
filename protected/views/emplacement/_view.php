<?php
/* @var $this EmplacementController */
/* @var $data Emplacement */
?>

<div class="view">

    <b><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>:</b>

    <b><?php echo CHtml::encode($data->location->name); ?></b>
    :
    <b><?php echo CHtml::encode($data->name); ?></b>
    
</div>