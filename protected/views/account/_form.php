<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'account-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note"><?php echo Yii::t('site', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site', 'are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'position_id'); ?>
        <?php
        //echo $form->textField($model, 'utype_id', array('size' => 21, 'maxlength' => 21));
        echo $form->dropDownList($model, 'position_id', CHtml::listData(Position::model()->findAll(), 'id', 'name'), array(
            //'size' => 21,
            'maxlength' => 21
        ));
        ?>
        <?php echo $form->error($model, 'position_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'software_id'); ?>
        <?php
        //echo $form->textField($model, 'utype_id', array('size' => 21, 'maxlength' => 21));
        echo $form->dropDownList($model, 'software_id', CHtml::listData(Software::model()->findAll(), 'id', 'name'), array(
            //'size' => 21,
            'maxlength' => 21
        ));
        ?>

        <?php echo $form->error($model, 'software_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'login'); ?>
        <?php echo $form->textField($model, 'login', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'login'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'pasword'); ?>
        <?php echo $form->textField($model, 'pasword', array('size' => 45, 'maxlength' => 2048)); ?>
        <?php echo $form->error($model, 'pasword'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'digi_certs'); ?>
        <?php echo $form->textArea($model, 'digi_certs', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'digi_certs'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'restore_phone'); ?>
        <?php echo $form->textField($model, 'restore_phone', array('size' => 14, 'maxlength' => 14)); ?>
        <?php echo $form->error($model, 'restore_phone'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'restore_email'); ?>
        <?php echo $form->textField($model, 'restore_email', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'restore_email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'restore_responce'); ?>
        <?php echo $form->textField($model, 'restore_responce', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'restore_responce'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'uri_addr'); ?>
        <?php echo $form->textField($model, 'uri_addr', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'uri_addr'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'last_update'); ?>
        <?php echo $form->textField($model, 'last_update', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'last_update'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site', 'Create') : Yii::t('site', 'Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->