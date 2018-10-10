<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs = array(
    'Positions' => array('position/admin'),
    'Create',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Position'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Manage Position'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Position'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>