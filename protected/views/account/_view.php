<?php
/* @var $this AccountController */
/* @var $data Account */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('position_id')); ?>:</b>
    <?php echo CHtml::encode($data->position_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('software_id')); ?>:</b>
    <?php echo CHtml::encode($data->software_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
    <?php echo CHtml::encode($data->login); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('pasword')); ?>:</b>
    <?php echo CHtml::encode(bin2hex($data->pasword)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('digi_certs')); ?>:</b>
    <?php echo CHtml::encode($data->digi_certs); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('restore_phone')); ?>:</b>
    <?php echo CHtml::encode($data->restore_phone); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('restore_email')); ?>:</b>
      <?php echo CHtml::encode($data->restore_email); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('restore_responce')); ?>:</b>
      <?php echo CHtml::encode($data->restore_responce); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('uri_addr')); ?>:</b>
      <?php echo CHtml::encode($data->uri_addr); ?>
      <br />

     */ ?>

</div>