<?php
/* @var $this EmplacementController */
/* @var $model Emplacement */

$this->breadcrumbs = array(
    'Emplacements' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
//array('label'=>Yii::t('site','List Emplacement'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Emplacement'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Emplacement'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Emplacement'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Emplacement'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>