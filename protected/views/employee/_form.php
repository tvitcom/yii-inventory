<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note"><?php echo Yii::t('site', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site', 'are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

            <div class="row">
            <?php echo $form->labelEx($model,'company_id'); ?>
            <?php echo $form->dropDownList(
                    $model, 
                    'company_id', 
                    CHtml::listData(Company::model()->findAll(), 'id', 'short_name'), 
                    array('maxlength' => 21)
                    );
            ?>
            <?php echo $form->error($model,'company_id'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'person_id'); ?>
            <?php 
            if (Person::model()->isNewRecord):
            echo $form->dropDownList(
                $model, 
                'person_id', 
                CHtml::listData(Person::model()->findByPk($applicant->id), 'id', 'fullname'), 
                array(
                    'maxlength' => 21,
                ));
            else:
                echo $form->dropDownList(
                $model, 
                'person_id', 
                CHtml::listData(Person::model()->findAll("id=:applicant", array(":applicant"=>$applicant->id)), 'id', 'fullname'), 
                array(
                    'maxlength' => 21,
                ));
            endif;
            ?>
            <?php echo $form->error($model,'person_id'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'position_id'); ?>
            <?php echo $form->dropDownList($model, 'position_id', CHtml::listData(Position::model()->findAll(), 'id', 'name'), array(
                    'maxlength' => 21
                ));
            ?>
            <?php echo $form->error($model,'position_id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'t_start'); ?>
            <?php echo $form->textField($model,'t_start'); ?>
            <?php echo $form->error($model,'t_start'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'t_end'); ?>
            <?php echo $form->textField($model,'t_end'); ?>
            <?php echo $form->error($model,'t_end'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'end_reason'); ?>
            <?php echo $form->textField($model,'end_reason',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'end_reason'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('site','Create') : Yii::t('site','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
