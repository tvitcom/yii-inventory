<?php
/* @var $this WorkplaceController */
/* @var $model Workplace */

$this->breadcrumbs = array(
    'Workplaces' => array('workplace/admin'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Workplace'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Workplace'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Workplace'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Workplace'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Workplace'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>