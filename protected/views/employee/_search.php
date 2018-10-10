<?php
/* @var $this EmployeeController */
/* @var $model Employee */
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
            <?php echo $form->label($model,'person_id'); ?>
            <?php echo $form->textField($model,'person_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'position_id'); ?>
            <?php echo $form->textField($model,'position_id',array('size'=>21,'maxlength'=>21)); ?>
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
            <?php echo $form->label($model,'end_reason'); ?>
            <?php echo $form->textField($model,'end_reason',array('size'=>60,'maxlength'=>128)); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->