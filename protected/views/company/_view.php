<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('short_name')); ?>:</b>
    <?php echo CHtml::encode($data->short_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('company_site')); ?>:</b>
    <?php echo CHtml::encode($data->company_site); ?>
    <br />


</div>