<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs = array(
    'People' => array('person/admin'),
    'Create',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Person'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Manage Person'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Person'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>