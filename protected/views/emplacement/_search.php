<?php
/* @var $this EmplacementController */
/* @var $model Emplacement */
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
            <?php echo $form->label($model,'location_id'); ?>
            <?php echo $form->textField($model,'location_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'office_num'); ?>
            <?php echo $form->textField($model,'office_num',array('size'=>5,'maxlength'=>5)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'map_coords'); ?>
            <?php echo $form->textField($model,'map_coords',array('size'=>60,'maxlength'=>64)); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->