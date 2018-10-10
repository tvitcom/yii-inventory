<?php
/* @var $this UnitController */
/* @var $model Unit */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'unit-form',
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
        <?php echo $form->labelEx($model, 'utype_id'); ?>
        <?php
        echo $form->dropDownList($model, 'utype_id', CHtml::listData(Utype::model()->findAll(array('order' => 'name')), 'id', 'name'), array(
            'maxlength' => 21
        ));
        ?>
        <?php echo $form->error($model, 'utype_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'emplacement_id'); ?>
        <?php
        echo CHtml::dropDownList('Unit[emplacement_id]', '', CHtml::listData(Emplacement::model()->findAll(array('order' => 'name')), 'id', 'name'), array(
            'maxlength' => 21,
            'ajax' => array(
                'type' => 'POST',
                'url' => $this->createUrl('unit/getPlaces'),
                'update' => '#select_room',
            ),
        ));
        ?>
        <?php echo $form->error($model, 'emplacement_id'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'workplace_id'); ?>
        <?php
        echo CHtml::dropDownList('Unit[workplace_id]', Yii::t('site', 'Your room'), array(
            'empty' => Yii::t('site', 'Select places')
            ), array(
            'class' => 'form-control',
            'type' => 'text',
            'id' => 'select_room',
        ));
        ?>
        <?php echo $form->error($model, 'workplace_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'inventory_num'); ?>
        <?php echo $form->textField($model, 'inventory_num', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'inventory_num'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'serial_num'); ?>
        <?php echo $form->textField($model, 'serial_num', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'serial_num'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'mac_addr'); ?>
        <?php echo $form->textField($model, 'mac_addr', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'mac_addr'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'main_ipv4'); ?>
        <?php echo $form->textField($model, 'main_ipv4', array('size' => 18, 'maxlength' => 18)); ?>
        <?php echo $form->error($model, 'main_ipv4'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'main_ipv6'); ?>
        <?php echo $form->textField($model, 'main_ipv6', array('size' => 39, 'maxlength' => 39)); ?>
        <?php echo $form->error($model, 'main_ipv6'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'dt_purchase'); ?>
        <?php echo $form->textField($model, 'dt_purchase'); ?>
        <?php echo $form->error($model, 'dt_purchase'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'dt_endwarranty'); ?>
        <?php echo $form->textField($model, 'dt_endwarranty'); ?>
        <?php echo $form->error($model, 'dt_endwarranty'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'vendor_name'); ?>
        <?php echo $form->textField($model, 'vendor_name', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'vendor_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'cost'); ?>
        <?php echo $form->textField($model, 'cost', array('size' => 11, 'maxlength' => 11)); ?>
        <?php echo $form->error($model, 'cost'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'documents'); ?>
        <?php echo $form->textField($model, 'documents', array('size' => 51, 'maxlength' => 51)); ?>
        <?php echo $form->error($model, 'documents'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'is_broken'); ?>
        <?php echo $form->checkbox($model, 'is_broken'); ?>
        <?php echo $form->error($model, 'is_broken'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'broken_description'); ?>
        <?php echo $form->textField($model, 'broken_description', array('size' => 46, 'maxlength' => 46)); ?>
        <?php echo $form->error($model, 'broken_description'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site', 'Create') : Yii::t('site', 'Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
