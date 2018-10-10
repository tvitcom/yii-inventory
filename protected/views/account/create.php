<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs = array(
    'Accounts' => array('index'),
    'Create',
);

$this->menu = array(
//array('label'=>Yii::t('site', 'List Account'), 'url'=>array('index')),
    array('label' => Yii::t('site', 'Manage Account'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('site', 'Create Account'); ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>