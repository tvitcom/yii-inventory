<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
<?php echo $form->label($model, 'id'); ?>
<?php echo $form->textField($model, 'id', array('size' => 21, 'maxlength' => 21)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'position_id'); ?>
<?php echo $form->textField($model, 'position_id', array('size' => 21, 'maxlength' => 21)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'software_id'); ?>
<?php echo $form->textField($model, 'software_id', array('size' => 21, 'maxlength' => 21)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'login'); ?>
<?php echo $form->textField($model, 'login', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'pasword'); ?>
<?php echo $form->textField($model, 'pasword', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'digi_certs'); ?>
<?php echo $form->textArea($model, 'digi_certs', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'restore_phone'); ?>
<?php echo $form->textField($model, 'restore_phone', array('size' => 14, 'maxlength' => 14)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'restore_email'); ?>
<?php echo $form->textField($model, 'restore_email', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'restore_responce'); ?>
<?php echo $form->textField($model, 'restore_responce', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
<?php echo $form->label($model, 'uri_addr'); ?>
<?php echo $form->textField($model, 'uri_addr', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton(Yii::t('site', 'Search')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->