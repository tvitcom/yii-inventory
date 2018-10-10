<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs = array(
    'Accounts' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
//array('label'=>Yii::t('site','List Account'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Create Account'), 'url' => array('create')),
    array('label' => Yii::t('site', 'View Account'), 'url' => array('view', 'id' => $model->id)),
    array('label' => Yii::t('site', 'Manage Account'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Update Account'); ?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>