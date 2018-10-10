<?php
/* @var $this SoftwareController */
/* @var $model Software */

$this->breadcrumbs=array(
	'Softwares'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>Yii::t('site','List Software'), 'url'=>array('index')),
array('label'=>Yii::t('site','Create Software'), 'url'=>array('create')),
array('label'=>Yii::t('site','View Software'), 'url'=>array('view', 'id'=>$model->id)),
array('label'=>Yii::t('site','Manage Software'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Update Software');?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>