<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note"><?php echo Yii::t('site', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site', 'are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

            <div class="row">
            <?php echo $form->labelEx($model,'user_id'); ?>
            <?php echo $form->textField($model,'user_id',array('size'=>21,'maxlength'=>21)); ?>
            <?php echo $form->error($model,'user_id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'fullname'); ?>
            <?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>65)); ?>
            <?php echo $form->error($model,'fullname'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'t_birthday'); ?>
            <?php echo $form->textField($model,'t_birthday'); ?>
            <?php echo $form->error($model,'t_birthday'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'ident_code'); ?>
            <?php echo $form->textField($model,'ident_code',array('size'=>18,'maxlength'=>18)); ?>
            <?php echo $form->error($model,'ident_code'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'passport_data'); ?>
            <?php echo $form->textField($model,'passport_data',array('size'=>60,'maxlength'=>512)); ?>
            <?php echo $form->error($model,'passport_data'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'address_data'); ?>
            <?php echo $form->textField($model,'address_data',array('size'=>60,'maxlength'=>256)); ?>
            <?php echo $form->error($model,'address_data'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'photo_link'); ?>
            <?php echo $form->textField($model,'photo_link',array('size'=>60,'maxlength'=>512)); ?>
            <?php echo $form->error($model,'photo_link'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'contact_data'); ?>
            <?php echo $form->textField($model,'contact_data',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'contact_data'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'is_enterpreneur'); ?>
            <?php echo $form->textField($model,'is_enterpreneur'); ?>
            <?php echo $form->error($model,'is_enterpreneur'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site','Create') : Yii::t('site','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->