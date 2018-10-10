<?php
/* @var $this WorkplaceController */
/* @var $model Workplace */
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
            <?php echo $form->label($model,'emplacement_id'); ?>
            <?php echo $form->textField($model,'emplacement_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'work_num'); ?>
            <?php echo $form->textField($model,'work_num'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'description'); ?>
            <?php echo $form->textField($model,'description',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->