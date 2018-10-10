<?php
/* @var $this WorkplaceController */
/* @var $model Workplace */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'workplace-form',
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
        <?php echo $form->labelEx($model, 'emplacement_id'); ?>
        <?php
        echo $form->dropDownList($model, 'emplacement_id', CHtml::listData(Emplacement::model()->findAll(), 'id', 'name'), array(
            'maxlength' => 21
        ));
        ?>
        <?php echo $form->error($model, 'emplacement_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'work_num'); ?>
        <?php echo $form->textField($model, 'work_num'); ?>
        <?php echo $form->error($model, 'work_num'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textField($model, 'description', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site', 'Create') : Yii::t('site', 'Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->