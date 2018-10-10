<?php
/* @var $this SoftwareController */
/* @var $model Software */
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
            <?php echo $form->label($model,'upload_link'); ?>
            <?php echo $form->textField($model,'upload_link',array('size'=>60,'maxlength'=>1024)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'work_platform'); ?>
            <?php echo $form->textField($model,'work_platform',array('size'=>11,'maxlength'=>11)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'license_type'); ?>
            <?php echo $form->textField($model,'license_type',array('size'=>35,'maxlength'=>35)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'license_text'); ?>
            <?php echo $form->textArea($model,'license_text',array('rows'=>6, 'cols'=>50)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'our_license_key'); ?>
            <?php echo $form->textArea($model,'our_license_key',array('rows'=>6, 'cols'=>50)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'t_start'); ?>
            <?php echo $form->textField($model,'t_start'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'t_end'); ?>
            <?php echo $form->textField($model,'t_end'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'is_licensed'); ?>
            <?php echo $form->textField($model,'is_licensed'); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->