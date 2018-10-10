<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'id'); ?>
            <?php echo $form->textField($model,'id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'person_id'); ?>
            <?php echo $form->textField($model,'person_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'company_id'); ?>
            <?php echo $form->textField($model,'company_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'title'); ?>
            <?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'login'); ?>
            <?php echo $form->textField($model,'login',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'pass_hash'); ?>
            <?php echo $form->textField($model,'pass_hash',array('size'=>60,'maxlength'=>64)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'pass_reset_token'); ?>
            <?php echo $form->textField($model,'pass_reset_token',array('size'=>60,'maxlength'=>64)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'ava_link'); ?>
            <?php echo $form->textField($model,'ava_link',array('size'=>60,'maxlength'=>256)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'t_lastlogin'); ?>
            <?php echo $form->textField($model,'t_lastlogin'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'t_registered'); ?>
            <?php echo $form->textField($model,'t_registered'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'auth_key'); ?>
            <?php echo $form->textField($model,'auth_key',array('size'=>60,'maxlength'=>128)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'current_session_id'); ?>
            <?php echo $form->textField($model,'current_session_id',array('size'=>60,'maxlength'=>64)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'is_active'); ?>
            <?php echo $form->textField($model,'is_active'); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->