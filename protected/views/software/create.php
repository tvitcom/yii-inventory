<?php
/* @var $this SoftwareController */
/* @var $model Software */

$this->breadcrumbs=array(
	'Softwares'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>Yii::t('site', 'List Software'), 'url'=>array('index')),
array('label'=>Yii::t('site', 'Manage Software'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('site','Create Software');?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>