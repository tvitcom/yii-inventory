<?php
/* @var $this LocationController */
/* @var $model Location */
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
            <?php echo $form->label($model,'company_id'); ?>
            <?php echo $form->textField($model,'company_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'address'); ?>
            <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>128)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'address_unofficial'); ?>
            <?php echo $form->textField($model,'address_unofficial',array('size'=>60,'maxlength'=>128)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'gps_coords'); ?>
            <?php echo $form->textField($model,'gps_coords',array('size'=>60,'maxlength'=>64)); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->