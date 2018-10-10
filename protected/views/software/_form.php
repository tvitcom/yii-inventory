<?php
/* @var $this SoftwareController */
/* @var $model Software */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'software-form',
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
            <?php echo $form->labelEx($model,'upload_link'); ?>
            <?php echo $form->textField($model,'upload_link',array('size'=>60,'maxlength'=>1024)); ?>
            <?php echo $form->error($model,'upload_link'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'work_platform'); ?>
            <?php echo $form->textField($model,'work_platform',array('size'=>11,'maxlength'=>11)); ?>
            <?php echo $form->error($model,'work_platform'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'license_type'); ?>
            <?php echo $form->textField($model,'license_type',array('size'=>35,'maxlength'=>35)); ?>
            <?php echo $form->error($model,'license_type'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'license_text'); ?>
            <?php echo $form->textArea($model,'license_text',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'license_text'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'our_license_key'); ?>
            <?php echo $form->textArea($model,'our_license_key',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'our_license_key'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'t_start'); ?>
            <?php echo $form->textField($model,'t_start'); ?>
            <?php echo $form->error($model,'t_start'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'t_end'); ?>
            <?php echo $form->textField($model,'t_end'); ?>
            <?php echo $form->error($model,'t_end'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'is_licensed'); ?>
            <?php echo $form->textField($model,'is_licensed'); ?>
            <?php echo $form->error($model,'is_licensed'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site','Create') : Yii::t('site','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->