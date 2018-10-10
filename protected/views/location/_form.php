<?php
/* @var $this LocationController */
/* @var $model Location */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'location-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note"><?php echo Yii::t('site', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site', 'are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

            <div class="row">
            <?php echo $form->labelEx($model,'company_id'); ?>
            <?php echo $form->textField($model,'company_id',array('size'=>21,'maxlength'=>21)); ?>
            <?php echo $form->error($model,'company_id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'address'); ?>
            <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'address'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'address_unofficial'); ?>
            <?php echo $form->textField($model,'address_unofficial',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'address_unofficial'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'gps_coords'); ?>
            <?php echo $form->textField($model,'gps_coords',array('size'=>60,'maxlength'=>64)); ?>
            <?php echo $form->error($model,'gps_coords'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site','Create') : Yii::t('site','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->