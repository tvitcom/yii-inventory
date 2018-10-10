<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>Yii::t('site','List User'), 'url'=>array('index')),
array('label'=>Yii::t('site','Create User'), 'url'=>array('create')),
array('label'=>Yii::t('site','View User'), 'url'=>array('view', 'id'=>$model->id)),
array('label'=>Yii::t('site','Manage User'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Update User');?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>