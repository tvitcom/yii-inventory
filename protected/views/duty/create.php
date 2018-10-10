<?php
/* @var $this DutyController */
/* @var $model Duty */

$this->breadcrumbs = array(
    'Duties' => array('index'),
    'Create',
);

$this->menu = array(
//array('label'=>Yii::t('site', 'List Duty'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Manage Duty'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Duty'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>