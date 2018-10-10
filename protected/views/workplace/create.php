<?php
/* @var $this WorkplaceController */
/* @var $model Workplace */

$this->breadcrumbs = array(
    'Workplaces' => array('workplace/admin'),
    'Create',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Workplace'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Manage Workplace'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Workplace'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>