<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>Yii::t('site', 'List Location'), 'url'=>array('index')),
array('label'=>Yii::t('site', 'Manage Location'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Create Location');?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>