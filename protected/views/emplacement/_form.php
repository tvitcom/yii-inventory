<?php
/* @var $this EmplacementController */
/* @var $model Emplacement */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'emplacement-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note"><?php echo Yii::t('site', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site', 'are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'location_id'); ?>
        <?php
        //echo $form->textField($model,'location_id',array('size'=>21,'maxlength'=>21));
        echo $form->dropDownList($model, 'location_id', CHtml::listData(Location::model()->findAll(), 'id', 'name'), array(
            //'size' => 21,
            'maxlength' => 21
        ));
        ?>
        <?php echo $form->error($model, 'location_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'office_num'); ?>
        <?php echo $form->textField($model, 'office_num', array('size' => 5, 'maxlength' => 5)); ?>
        <?php echo $form->error($model, 'office_num'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'map_coords'); ?>
        <?php echo $form->textField($model, 'map_coords', array('size' => 60, 'maxlength' => 64)); ?>
        <?php echo $form->error($model, 'map_coords'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site', 'Create') : Yii::t('site', 'Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->