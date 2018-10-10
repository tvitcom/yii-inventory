<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>Yii::t('site','List Location'), 'url'=>array('index')),
array('label'=>Yii::t('site','Create Location'), 'url'=>array('create')),
array('label'=>Yii::t('site','View Location'), 'url'=>array('view', 'id'=>$model->id)),
array('label'=>Yii::t('site','Manage Location'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Update Location');?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>