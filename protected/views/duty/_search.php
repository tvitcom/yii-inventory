<?php
/* @var $this DutyController */
/* @var $model Duty */
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
            <?php echo $form->label($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'responsibility'); ?>
            <?php echo $form->textField($model,'responsibility',array('size'=>60,'maxlength'=>256)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'with_team_id'); ?>
            <?php echo $form->textField($model,'with_team_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'position_id'); ?>
            <?php echo $form->textField($model,'position_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->