<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note"><?php echo Yii::t('site', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site', 'are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

            <div class="row">
            <?php echo $form->labelEx($model,'person_id'); ?>
            <?php echo $form->textField($model,'person_id',array('size'=>21,'maxlength'=>21)); ?>
            <?php echo $form->error($model,'person_id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'company_id'); ?>
            <?php echo $form->textField($model,'company_id',array('size'=>21,'maxlength'=>21)); ?>
            <?php echo $form->error($model,'company_id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'title'); ?>
            <?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'title'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'login'); ?>
            <?php echo $form->textField($model,'login',array('size'=>21,'maxlength'=>21)); ?>
            <?php echo $form->error($model,'login'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'pass_hash'); ?>
            <?php echo $form->textField($model,'pass_hash',array('size'=>60,'maxlength'=>64)); ?>
            <?php echo $form->error($model,'pass_hash'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'pass_reset_token'); ?>
            <?php echo $form->textField($model,'pass_reset_token',array('size'=>60,'maxlength'=>64)); ?>
            <?php echo $form->error($model,'pass_reset_token'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'ava_link'); ?>
            <?php echo $form->textField($model,'ava_link',array('size'=>60,'maxlength'=>256)); ?>
            <?php echo $form->error($model,'ava_link'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'t_lastlogin'); ?>
            <?php echo $form->textField($model,'t_lastlogin'); ?>
            <?php echo $form->error($model,'t_lastlogin'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'t_registered'); ?>
            <?php echo $form->textField($model,'t_registered'); ?>
            <?php echo $form->error($model,'t_registered'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'auth_key'); ?>
            <?php echo $form->textField($model,'auth_key',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'auth_key'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'current_session_id'); ?>
            <?php echo $form->textField($model,'current_session_id',array('size'=>60,'maxlength'=>64)); ?>
            <?php echo $form->error($model,'current_session_id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'is_active'); ?>
            <?php echo $form->textField($model,'is_active'); ?>
            <?php echo $form->error($model,'is_active'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site','Create') : Yii::t('site','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->