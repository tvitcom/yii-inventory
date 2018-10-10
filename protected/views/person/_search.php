<?php
/* @var $this PersonController */
/* @var $model Person */
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
            <?php echo $form->label($model,'user_id'); ?>
            <?php echo $form->textField($model,'user_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'fullname'); ?>
            <?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>65)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'t_birthday'); ?>
            <?php echo $form->textField($model,'t_birthday'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'ident_code'); ?>
            <?php echo $form->textField($model,'ident_code',array('size'=>18,'maxlength'=>18)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'passport_data'); ?>
            <?php echo $form->textField($model,'passport_data',array('size'=>60,'maxlength'=>512)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'address_data'); ?>
            <?php echo $form->textField($model,'address_data',array('size'=>60,'maxlength'=>256)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'photo_link'); ?>
            <?php echo $form->textField($model,'photo_link',array('size'=>60,'maxlength'=>512)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'contact_data'); ?>
            <?php echo $form->textField($model,'contact_data',array('size'=>60,'maxlength'=>128)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'is_enterpreneur'); ?>
            <?php echo $form->textField($model,'is_enterpreneur'); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->