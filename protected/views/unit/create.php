<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs = array(
    Yii::t('site', 'Units') => array('unit/admin'),
    Yii::t('site', 'Create'),
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Unit'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Manage Unit'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Unit'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>