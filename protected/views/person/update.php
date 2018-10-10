<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs = array(
    'People' => array('person/admin'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => Yii::t('site', 'List Person'), 'url' => array('index')),
    array('label' => Yii::t('site', 'Create Person'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Person'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Person'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Person'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>