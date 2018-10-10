<?php
/* @var $this UtypeController */
/* @var $model Utype */

$this->breadcrumbs = array(
    'Utypes' => array('admin'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
//array('label'=>Yii::t('site','List Utype'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Utype'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Utype'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Utype'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Utype'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>