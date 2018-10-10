<?php
/* @var $this UtypeController */
/* @var $model Utype */

$this->breadcrumbs = array(
    'Utypes' => array('admin'),
    'Create',
);

$this->menu = array(
//array('label'=>Yii::t('site', 'List Utype'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Manage Utype'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Utype'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>