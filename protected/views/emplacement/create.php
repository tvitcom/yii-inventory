<?php
/* @var $this EmplacementController */
/* @var $model Emplacement */

$this->breadcrumbs = array(
    'Emplacements' => array('index'),
    'Create',
);

$this->menu = array(
//array('label'=>Yii::t('site', 'List Emplacement'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Manage Emplacement'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Emplacement'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>