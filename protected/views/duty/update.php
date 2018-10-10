<?php
/* @var $this DutyController */
/* @var $model Duty */

$this->breadcrumbs = array(
    'Duties' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
//array('label'=>Yii::t('site','List Duty'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Duty'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Duty'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Duty'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Duty'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>