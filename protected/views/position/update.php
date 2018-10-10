<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs = array(
    'Positions' => array('position/admin'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Position'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Position'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Position'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Position'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Position'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>