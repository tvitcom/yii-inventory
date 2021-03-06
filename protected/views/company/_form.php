<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note"><?php echo Yii::t('site', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site', 'are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

            <div class="row">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'short_name'); ?>
            <?php echo $form->textField($model,'short_name',array('size'=>45,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'short_name'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'company_site'); ?>
            <?php echo $form->textField($model,'company_site',array('size'=>45,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'company_site'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'digi_certs'); ?>
            <?php echo $form->textArea($model,'digi_certs',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'digi_certs'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site','Create') : Yii::t('site','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->