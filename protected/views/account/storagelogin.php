<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Get Storage Password';
$this->breadcrumbs = array(
    Yii::t('site', 'Login'),
);
?>

<h1><?php echo Yii::t('site', 'Login'); ?></h1>

<p><?php echo Yii::t('site', 'Please fill master password for your passwords storage'); ?>:</p>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('site', 'Fields with'); ?>
        <span class="required">*</span> <?php echo Yii::t('site', 'are required'); ?>.</p>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
        <p class="hint">
        </p>
    </div>

    <div class="row rememberMe">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('site', 'Submit')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
