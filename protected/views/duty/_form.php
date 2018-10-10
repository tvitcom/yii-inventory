<?php
/* @var $this DutyController */
/* @var $model Duty */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'duty-form',
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
            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'responsibility'); ?>
            <?php echo $form->textField($model,'responsibility',array('size'=>60,'maxlength'=>256)); ?>
            <?php echo $form->error($model,'responsibility'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'with_team_id'); ?>
            <?php echo $form->textField($model,'with_team_id',array('size'=>21,'maxlength'=>21)); ?>
            <?php echo $form->error($model,'with_team_id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'position_id'); ?>
            <?php echo $form->textField($model,'position_id',array('size'=>21,'maxlength'=>21)); ?>
            <?php echo $form->error($model,'position_id'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site','Create') : Yii::t('site','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->