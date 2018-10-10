<?php
/* @var $this UnitController */
/* @var $model Unit */
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
            <?php echo $form->label($model,'utype_id'); ?>
            <?php echo $form->textField($model,'utype_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'emplacement_id'); ?>
            <?php echo $form->textField($model,'emplacement_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'workplace_id'); ?>
            <?php echo $form->textField($model,'workplace_id',array('size'=>21,'maxlength'=>21)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'serial_num'); ?>
            <?php echo $form->textField($model,'serial_num',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'inventory_num'); ?>
            <?php echo $form->textField($model,'inventory_num',array('size'=>10,'maxlength'=>10)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'mac_addr'); ?>
            <?php echo $form->textField($model,'mac_addr',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'main_ipv4'); ?>
            <?php echo $form->textField($model,'main_ipv4',array('size'=>18,'maxlength'=>18)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'main_ipv6'); ?>
            <?php echo $form->textField($model,'main_ipv6',array('size'=>39,'maxlength'=>39)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'dt_purchase'); ?>
            <?php echo $form->textField($model,'dt_purchase'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'dt_endwarranty'); ?>
            <?php echo $form->textField($model,'dt_endwarranty'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'vendor_name'); ?>
            <?php echo $form->textField($model,'vendor_name',array('size'=>45,'maxlength'=>45)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'cost'); ?>
            <?php echo $form->textField($model,'cost',array('size'=>11,'maxlength'=>11)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'documents'); ?>
            <?php echo $form->textField($model,'documents',array('size'=>51,'maxlength'=>51)); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'is_broken'); ?>
            <?php echo $form->textField($model,'is_broken'); ?>
        </div>

                    <div class="row">
            <?php echo $form->label($model,'broken_description'); ?>
            <?php echo $form->textField($model,'broken_description',array('size'=>46,'maxlength'=>46)); ?>
        </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site','Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->