<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs = array(
    'Units' => array('unit/admin'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    //array('label' => Yii::t('site', 'List Unit'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Unit'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Unit'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Unit'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Unit'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>